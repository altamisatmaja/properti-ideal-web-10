@extends('includes.app')

@section('title', 'Properti Ideal | Profile')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @push('js')
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scrollPosition = $(window).scrollTop();
                    var blurTriggerPosition = 200;

                    // Menambahkan atau menghapus kelas blur sesuai dengan posisi scroll
                    if (scrollPosition > blurTriggerPosition) {
                        $('.sticky').addClass('blurred-background');
                    } else {
                        $('.sticky').removeClass('blurred-background');
                    }
                });
            });
        </script>
    @endpush
@endsection
