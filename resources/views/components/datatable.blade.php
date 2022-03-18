<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    <div class="card-body border-bottom py-3">
        <div class="d-flex">
            <div class="text-muted">
                {{ __('Show') }}
                <div class="mx-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="{{ __('Count') }}">
                </div>
                {{ __('entries') }}
            </div>
            <div class="ms-auto text-muted">
                {{ __('Search') }}:
                <div class="ms-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm" aria-label="{{ __('Searching') }}">
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
            {{ $heading }}
            </thead>
            <tbody>
            {{ $body }}
            </tbody>
        </table>
    </div>
    <div class="card-footer d-flex align-items-center">
        {{ $footer }}
    </div>
</div>
