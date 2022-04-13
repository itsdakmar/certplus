<x-app-layout>
    <x-slot name="pageHeader">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                        {{ __('Team members') }}
                    </h2>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="col-12">
        <x-datatable>
            <x-slot name="title">
                {{ __('Team members') }}
            </x-slot>
            <x-slot name="heading">
                <tr>
                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                    <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="6 15 12 9 18 15" /></svg>
                    </th>
                    <th>Invoice Subject</th>
                    <th>Client</th>
                    <th>VAT No.</th>
                    <th>Created</th>
                    <th>{{ __('Role') }}</th>
                    <th></th>
                </tr>
            </x-slot>
            <x-slot name="body">
                @foreach($users as $user)
                    <tr>
                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select member"></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->email_verified_at }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
                        <td>{{ __('Role') }}</td>
                        <td><a href="#">{{ __('Edit') }}</td>
                    </tr>
                @endforeach
            </x-slot>
            <x-slot name="footer">
                {{ $users->links('components.pagination') }}
            </x-slot>
        </x-datatable>
    </div>
</x-app-layout>
