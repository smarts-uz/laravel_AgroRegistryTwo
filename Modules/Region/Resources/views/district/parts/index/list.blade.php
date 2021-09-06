<div class="table-responsive">
    <table id="empty-lands" class="table table-bordered">
        <thead>
            <tr class="bg-light">
                <th>№</th>
                <th>@lang('region::trans.areaid')</th>
                <th>@lang('region::trans.areaname_uz')</th>
                <th>@lang('region::trans.areaname_ru')</th>
                {{-- <th>@lang('region::trans.action')</th> --}}
            </tr>
        </thead>
        <tbody>
            @php $num = ($districts->currentPage() - 1) * $districts->perPage() + 1; @endphp
            @foreach ($districts as $key => $district)
                <tr role="row" class="odd">
                    <td tabindex="0">{{ $num }}</td>
                    <td>{{ $district->areaid }}</td>
                    <td>{{ $district->nameuz }}</td>
                    <td>{{ $district->nameru }}</td>
                </tr>
                @php $num++; @endphp
            @endforeach

            @if ($districts->total() == 0)
                <tr>
                    <td colspan="8">@lang('region::trans.nothing')</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="dataTables_info" id="datatable-buttons_info" role="status" aria-live="polite">Жами <strong>{{ $districts->total() }}</strong> маълумотлардан {{ ($districts->currentPage() - 1) * $districts->perPage() + 1  }} дан {{ ($districts->currentPage() - 1) * $districts->perPage() + $districts->count() }} гачаси жадвалда акс этмоқда</div>
    </div>
    <div class="col-sm-6">
        <div class="pagination-wrapper text-right no-child-top-margin pull-right">
            {{ $districts->links() }}
        </div>
    </div>
</div>
