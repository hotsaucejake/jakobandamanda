<script src="/wedding/js/jquery.min.js"></script>
<script src="/wedding/js/bootstrap.min.js"></script>

<script src="/js/bootstrap-notify.js"></script>

<!-- Plugins for this template -->
<script src="/wedding/js/jquery-plugin-collection.js"></script>

<!-- Custom script for this template -->
<script src="/wedding/js/script.js"></script>

@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <script>
            $.notify({
                title: '<strong>ERROR</strong>',
                message: '{{ $error }}'
            },{
                type: 'danger',
                placement: {
                    from: "bottom",
                    align: "right"
                },
            });
        </script>
    @endforeach
@endif

@if(session()->has('notify'))
    <script>
        $.notify({
            title: "{{ session('notify.title') }}",
            message: "{{ session('notify.message') }}",
        },{
            type: "{{ session('notify.type') }}",
            placement: {
                from: "bottom",
                align: "right"
            },
        });
    </script>
@endif