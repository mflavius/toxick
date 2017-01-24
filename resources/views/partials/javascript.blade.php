<script src="{{ url('assets/js/jquery.js') }}"></script>
<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js') }}"></script>
<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.0.3/vue-resource.min.js') }}"></script>
<script src="{{ url('assets/js/bootstrap.js') }}"></script>
<script src="{{ url('assets/js/ripples.min.js') }}"></script>
<script src="{{ url('assets/js/material.min.js') }}"></script>
<script src="{{ url('assets/js/custom.js') }}"></script>
<script>
    Vue.http.headers.common['X-CSRF-TOKEN'] = $('#token').attr('content');
</script>