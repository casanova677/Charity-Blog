<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compose Email') }}
        </h2>

    </x-slot>

    <div class="container">
        <div class="email-wrap">
            <br><br>
            <div class=" col-md-12">


                @if ($message = Session::get('mail'))
                    <div class="alert alert-primary alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="email-wrapper">

                    <form role="form" method="POST" action="{{ route('sendmail') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">To</label>
                            <input type="email" class="form-control" name="email">
                        </div>


                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="subject">
                        </div>
                        <div>
                            <label class="text-muted form-label">Message</label>

                            <textarea class="form-control" name="message" rows="10" id="text-box"> </textarea>
                        </div>
                        <div class="mb-3">

                        </div>
                        <div class="col-sm-4 btn-middle xl-50">
                            <button type="submit" class="btn btn-primary w-100 btn-mail text-center mb-0 mt-0">
                                <i class="fa fa-paper-plane me-2"></i> SEND
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>



</x-app-layout>
