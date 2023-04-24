@auth
    <div class="main-sidebar flex-shrink-0 p-3 bg-white">
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-toggle="collapse" data-target="#inquiry" aria-expanded="false">조회
                </button>
                <div class="collapse" id="inquiry">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ url('/document/list') }}" class="link-dark d-inline-flex text-decoration-none rounded">조회</a></li>
                    </ul>
                </div>
            </li>
            <li class="mb-2">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-toggle="collapse" data-target="#insert" aria-expanded="false">작성</button>
                <div class="collapse" id="insert">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" id="menu-list"></ul>
                </div>
            </li>
            <li class="mb-3">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                        data-toggle="collapse" data-target="#ttestt" aria-expanded="false">테스트
                </button>
                <div class="collapse" id="ttestt">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="{{ url('/25-8kv_girs/create') }}" class="link-dark d-inline-flex text-decoration-none rounded">25.8kV GIS(보통, 정밀) 점검기록표</a></li>
{{--                        <li><a href="{{ url('/cooct/create') }}" class="link-dark d-inline-flex text-decoration-none rounded">개폐동작특성시험</a></li>--}}
                        <li><a href="{{ url('/cqis_154kv_si/create') }}" class="link-dark d-inline-flex text-decoration-none rounded">시공품질점검표_154kV Sh.C 설치</a></li>
                        <li><a href="{{ url('/daily_work_rpt/create') }}" class="link-dark d-inline-flex text-decoration-none rounded">작업일보</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: 'get',
                url: '/getDocType',
                async: false,
                success: function (response) {
                    for (var i = 0; i < response.length; i++) {
                        var data = '<li><a href="/' + response[i].code_abbreviation + '/create" class="link-dark d-inline-flex text-decoration-none rounded">';
                        data += response[i].document_type_nm;
                        data += '</a></li>';

                        $('#menu-list').append(data);
                    }
                },
                error: function (error) {
                    console.log(error);
                    alert('ERROR!');
                }
            });
        });
    </script>
@endauth
