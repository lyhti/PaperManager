# PaperManager Web

---
### EC2 환경 구성하기

모든 작업 시작전 OS 최신상태로 만들기
- sudo apt update
- sudo apt upgrade

1. nginx 설치
    - sudo apt-get install nginx
    - sudo nginx -v
    - sudo service nginx start


2. php 설치
    - php 7.4 설치를 위한 설치
        - sudo apt-get install -y software-properties-common
        - sudo add-apt-repository ppa:ondrej/php
    - sudo apt-get update
    - sudo apt-get install -y php7.4
    - sudo apt-get install -y php7.4-{curl,gd,mbstring,mysql,soap,json,intl,zip,xml,xmlrpc,cli,xsl}
    - php 버전 낮추기
        - sudo service php7.4-fpm restart


3. ubuntu apache 삭제 - **[apache 삭제](https://lynmp.com/ko/article/nmf3cd749b6876a4e1)**
    1) 실행중인 apache 확인
        - sudo service --status-all
        - 실행중인 apache 서비스 있을 경우 아래 내용(삭제) 실행
    2) apache 웹서버 삭제
        - sudo service apache2 stop
        - sudo apt-get remove apache2*
        - sudo apt-get --purge remove apache2*
        - sudo apt-get autoremove
    3) apache 웹서버 cache cleaning 삭제
        - sudo service apache-htcacheclean stop
        - sudo apt-get remove apache*
        - sudo apt-get --purge remove apache*
        - sudo apt-get autoremove
    4) apt 업데이트 후 정상 삭제 확인
        - sudo apt update
        - sudo apt upgrade
        - sudo service --status-all


4. php.ini 설정
    - sudo vi /etc/php/7.4/fpm/php.ini
    - "/cgi.fix_pathinfo" + Enter 입력하여 cgi.fix_pathinfo 위치 찾기
    - "i" 눌러서 편집모드 진입
    - <pre>
        # cgi.fix_pathinfo=1 을 0으로 변경
        cgi.fix_pathinfo=0
      </pre>
    - <pre>  // Its value may be 0 to disable the limit.
        post_max_size = 0
      
        // Maximum allowed size for uploaded files.
        upload_max_filesize = 3000M (3GB)
      
        // 파일 업로드 개수 (default 20개)
        max_file_uploads=200        
      </pre>
    - Esc 로 편집모드 해제 후, ":wq" + Enter로 vi 빠져나오기
    - sudo apt install wget php-cli php-zip unzip


5. nginx 설정 (php 연동)
    - sudo vi /etc/nginx/sites-available/default
    - root, index 수정 및 location ~ \.php$ 주석 풀기
    - ex)
    <pre>
    server {
        listen 80 default_server;
        listen [::]:80 default_server;

        # php project 연결(프로젝트 위치 확인 후 수정)
        root /home/ubuntu/papermanager/public;

        # Add index.php to the list if you are using PHP
        index.php;

        server_name _;

        charset utf-8;

        location / {
                try_files $uri $uri/ /index.php?$query_string;
        }

        # pass PHP scripts to FastCGI server
        # php location 주석 일부 해제
        location ~ \.php$ {
                include snippets/fastcgi-php.conf;
        #
        #       # With php-fpm (or other unix sockets):
                fastcgi_pass unix:/var/run/php/php7.4-fpm.sock;
        #       # With php-cgi (or other tcp sockets):
        #       fastcgi_pass 127.0.0.1:9000;
        }

        # deny access to .htaccess files, if Apache's document root
        # concurs with nginx's one
        #
        #location ~ /\.ht {
        #       deny all;
        #}
    }
    </pre>
    - Esc 로 편집모드 해제 후, ":wq" + Enter로 vi 빠져나오기
    - sudo service nginx start


6. composer 설치
    - sudo apt update
    - sudo apt upgrade
    - sudo apt install composer
    - 설치 확인.
        - composer


7. Laravel 설치 및 Project 생성
    - sudo apt laravel install
    - cd ~ (프로젝트 설치 위치 이동)
    - 초기 project 생성 시
        - composer create-project --prefer-dist laravel/laravel papermanager
    - git clone 시
        - git clone https://github.com/lyhti/papermanager.git
    - cd [prject_name]
        - ex) cd papermanager/
    - composer install (vendor 및 project 관련 package 생성)
    - .env 파일 추가해주기.


8. Laravel 권한 설정
    - sudo chown -R :www-data .
    - sudo chmod -R 777 storage/logs
    - sudo chmod -R 777 storage/framework
    - sudo chmod -R 777 storage/app


9. 시간대 변경
    - sudo timedatectl set-timezone Asia/Seoul


10. php 및 서버 재시동
    - sudo service php7.4-fpm restart
    - sudo service nginx restart



---
### RDS 생성 및 연결
1. RDS 생성
    - AWS Management console -> 서비스 -> 데이터베이스 -> RDS 선택 -> 데이터베이스 생성 클릭
    - **[사이트 참고](https://mia15.tistory.com/entry/AWS-RDS-%EC%83%9D%EC%84%B1%EB%B6%80%ED%84%B0-%EC%97%B0%EA%B2%B0%EA%B9%8C%EC%A7%80)**


2. 보안그룹의 Inbound 규칙 이외 에러 (접속불가)
    - Inbound 규칙 이후에도 외부 접속 안될 시
        - VPC Console 접속
        - Virtual Private Cloud -> 라우팅 테이블
        - 라우팅 테이블 ID 클릭
        - 아래쪽 라우팅 탭 선택
        - 라우팅 대상에 "0.0.0.0/0" 이 없는 라우팅 있을 시 라우팅 편집 추가.
            - 대상 1 : 0.0.0.0/0
            - 대상 2 : 인터넷 게이트웨이 아이디 (igw-xxxxxxxxxxxxxxxxx)
        - 변경 사항 저장
        - 개수와 상관 없이 라우팅 테이블 ID 별로 위 내용 체크


---
### 참고
1. Ubuntu php 버전 변경
    - sudo update-alternatives --config php


2. crontab 등록
    - crontab -e
    <pre>
    * * * cd /home/ubuntu/papermanager/ && sudo php artisan schedule:run 2>&1
    * * * sudo logrotate /etc/logrotate.d/papermanager
    </pre>


3. 업로드 파일 사이즈 크기 조절
    - nginx
    - php


4. logrotate 설정
    <pre>
    /home/ubuntu/papermanager/storage/logs/laravel.log {
    size 10M
    rotate 1000
    maxage 60
    create
    dateext
    dateformat -%Y%m%d%H%M%S.log
    su www-data www-data
    }
    </pre>


5. Nginx 403 (13 Permission denied) 해결하기
   https://rnokhs.tistory.com/entry/Nginx-403-13-Permission-denied-%ED%95%B4%EA%B2%B0%ED%95%98%EA%B8%B0


6. Bootstrap v4.6.2
---
### S3 환경 구성하기
1. Composer 패키지 관리자를 통해 패키지를 설치
    - Amazon S3: composer require league/flysystem-aws-s3-v3 1.0


2. 또한 성능 향상을 위해 캐시된 어댑터를 설치
    - CachedAdapter: composer require league/flysystem-cached-adapter 1.0


3. 파일 압축
    - composer require league/flysystem-ziparchive 1.0



---
### Excel Import
1. composer require maatwebsite/excel


2. Provider, alias 추가
    <pre>
   // config/app.php
   'providers' => [
   .
   .
   .
   Maatwebsite\Excel\ExcelServiceProvider::class,
   ]

   'aliases' => [
   .
   .
   'Excel' => Maatwebsite\Excel\Facades\Excel::class,
   ]
    </pre>


3. vendor publish 실행
    - php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config
