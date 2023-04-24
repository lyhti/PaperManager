<div class="pagination justify-content-end">
    <ul class="pagination">
        @if($rtnData->currentPage() == 1)
            <li class="page-item disabled">
                <a href="javascript:void(0);" class="page-link" aria-disabled="true">Previous</a>
            </li>
        @else
            <li class="page-item">
                <a href="javascript:void(0);" class="page-link" onclick="pageNation('pre', {{$rtnData->currentPage()}})">Previous</a>
            </li>
        @endif
        @if($rtnData->currentPage() == 1)
            <li class="page-item active" aria-current="page">
                <a href="javascript:void(0);" class="page-link">1</a>
        @else
            <li class="page-item">
                <a href="javascript:void(0);" class="page-link" onclick="pageNation(1)">1</a>
        @endif
            </li>
        @if($rtnData->lastPage() > 2)
            @if($rtnData->lastPage() < 8)
                @for($i = 2; $i < $rtnData->lastPage(); $i++)
                    @if($i == $rtnData->currentPage())
                        <li class="page-item active" aria-current="page">
                            <a href="javascript:void(0);" class="page-link">{{$i}}</a>
                    @else
                        <li class="page-item">
                            <a href="javascript:void(0);" class="page-link" onclick="pageNation({{$i}})">{{$i}}</a>
                    @endif
                @endfor
            </li>
            @else
                @if($rtnData->currentPage() < 5)
                    @for($i = 2; $i <= 5; $i++)
                        @if($i == $rtnData->currentPage())
                            <li class="page-item active" aria-current="page">
                                <a href="javascript:void(0);" class="page-link">{{$i}}</a>
                        @else
                            <li class="page-item">
                                <a href="javascript:void(0);" class="page-link" onclick="pageNation({{$i}})">{{$i}}</a>
                        @endif
                    </li>
                    @endfor
                    <li class="page-item">
                        <a href="javascript:void(0);" class="page-link">...</a>
                    </li>
                @else
                    @if($rtnData->lastPage() - $rtnData->currentPage() > 3)
                        <li class="page-item">
                            <a href="javascript:void(0);" class="page-link">...</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript:void(0);" class="page-link" onclick="pageNation({{$rtnData->currentPage()-1}})">{{$rtnData->currentPage()-1}}</a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a href="javascript:void(0);" class="page-link">{{$rtnData->currentPage()}}</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript:void(0);" class="page-link" onclick="pageNation({{$rtnData->currentPage()+1}})">{{$rtnData->currentPage()+1}}</a>
                        </li>
                        <li class="page-item">
                            <a href="javascript:void(0);" class="page-link">...</a>
                        </li>
                    @else
                        <li class="page-item">
                            <a href="javascript:void(0);" class="page-link">...</a>
                        </li>
                        @for($i = $rtnData->lastPage()-4; $i < $rtnData->lastPage(); $i++)
                            @if($i == $rtnData->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <a href="javascript:void(0);" class="page-link">{{$i}}</a>
                            @else
                                <li class="page-item">
                                    <a href="javascript:void(0);" class="page-link" onclick="pageNation({{$i}})">{{$i}}</a>
                            @endif
                        </li>
                        @endfor
                    @endif
                @endif
            @endif
        @endif
        @if($rtnData->currentPage() == $rtnData->lastPage())
            @if($rtnData->lastPage() != 1)
                <li class="page-item active" aria-current="page">
                    <a href="javascript:void(0);" class="page-link">{{$rtnData->lastPage()}}</a>
                </li>
                <li class="page-item disabled">
                    <a href="javascript:void(0);" class="page-link" aria-disabled="true">Next</a>
                </li>
            @else
                <li class="page-item disabled">
                    <a href="javascript:void(0);" class="page-link" aria-disabled="true">Next</a>
                </li>
            @endif
        @else
            <li class="page-item">
                <a href="javascript:void(0);" class="page-link" onclick="pageNation({{$rtnData->lastPage()}})">{{$rtnData->lastPage()}}</a>
            </li>
            <li class="page-item">
                <a href="javascript:void(0);" class="page-link" onclick="pageNation('next', {{$rtnData->currentPage()}})">Next</a>
            </li>
        @endif
    </ul>
</div>
