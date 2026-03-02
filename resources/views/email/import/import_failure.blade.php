@component('email.template.master', ['design' => 'light', 'settings' => $settings])

    @slot('header')
        @include('email.components.header', ['logo' => $logo])
    @endslot

    <h2>{{ $title }}</h2>

    <p>{{ctrans('texts.company_import_failure_body')}}</p>

    @if($user_message)
    <p>{{ $user_message }}</p>
    @endif

    @if(isset($whitelabel) && !$whitelabel)
        @slot('footer')
            @component('email.components.footer', ['url' => 'https://invoiceninja.com', 'url_text' => '&copy; Red Invoice'])
                For any info, please visit Red Invoice.
            @endcomponent
        @endslot
    @endif
@endcomponent
