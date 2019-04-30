<section class="getting-there-section section-padding" id="song">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-white">
                        <div class="vertical-line"><span><i class="fi flaticon-two"></i></span></div>
                        <h2>Song Request</h2>
                    </div>
                </div>
            </div> <!-- end section-title -->
    
            <div class="row content">
                <div class="col col-md-6">
                    <h3>Let’s Dance</h3>
                    <p>You’ll get me to dance if you play...</p>
                    
                    
                </div>
                <div class="col col-md-6">
                    <form action="{{ route('song') }}" method="POST">
                        @csrf
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" name="song" rows="3" placeholder="Request..."></textarea>
                        </div>
                        <button class="btn btn-lg btn-primary">Submit</button>
                    </form>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>