@auth
    <div class="main-sidebar flex-shrink-0 bg-light" style="min-height: 100vh; width: 250px">
        <nav class="nav" role="navigation">
            <ul class="nav__list" style="list-style-type: none; padding: 0; margin: 0;">
            {{-- <ul class="nav__list"> --}}
                <li>
                    <input id="group-1" type="checkbox" hidden />
                    <label for="group-1" style="margin-bottom: 0" ><span class="fa fa-angle-down" > </span>조회</label>
                    <ul class="group-list" style="list-style-type: none; padding: 0">
                    {{-- <ul class="group-list"> --}}
                            <li><a href="{{ url('/document/list') }}">조회</a></li>
                    </ul>
                </li>
                <li>
                    <input id="group-2" type="checkbox" hidden />
                    <label for="group-2" style="margin-bottom: 0"><span class="fa fa-angle-down"> </span>품질</label>
                    <ul class="group-list" style="list-style-type: none; ; padding: 0; margin: 0;" id="quality_menu-list">
                    </ul>
                </li>
                <li>
                    <input id="group-3" type="checkbox" hidden />
                    <label for="group-3" style="margin-bottom: 0"><span class="fa fa-angle-down"></span> 안전</label>
                    <ul class="group-list" style="list-style-type: none; ; padding: 0; margin: 0;" id="safety_menu-list">
                    </ul>
                </li>
            </ul>
        </nav>        
    </div>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: 'get',
                url: '/getDocType',
                async: false,
                success: function (response) {
                    for (var i = 0; i < response.length; i++) {
                        var data = '<li><a href="/' + response[i].code_abbreviation + '/insert">';
                        data += response[i].document_type_nm;
                        data += '</a></li>';

                        if(response[i].class == 'quality') {
                            $('#quality_menu-list').append(data);
                        } else {
                            $('#safety_menu-list').append(data);
                        }
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
