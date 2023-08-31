@extends('front.layouts.app')
{{--@section('title')--}}
{{--    Title Here--}}
{{--@endsection--}}
@push('css')
@endpush

@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>FAQs</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>FAQs</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <h2 class="display-4 mb-3 text-center">الأسئلة الشائعة</h2>
                <p class="lead text-center mb-10 px-md-16 px-lg-0">نرد على الاستفسارات الخاصة بكم في صورة سؤال
                    وجواب.</p>
                <div class="row">
                    <div class="col-lg-12 mb-0">
                        <div id="accordion-1" class="accordion-wrapper">
                            @foreach($faqs as $faq)

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
@push('js')
@endpush
