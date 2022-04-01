<div x-data="{ show: false }"
     x-init="show = {{ (bool) session('status') }}; message = '{{ session('status') }}'; setTimeout(() => { show = false }, 2500)"
     x-show="show"
     x-transition
     class="fixed-bottom m-4">
    <div class="d-flex justify-content-end">
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-status-bottom bg-success"></div>
                <div class="card-body">
                    <h3 class="card-title">{{ __('Notification') }}</h3>
                    <p x-text="message" class="text-muted"></p>
                </div>
            </div>
        </div>
    </div>
</div>
