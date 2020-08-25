<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div id="messageModal" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <p>{{ session('message') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-preview">
                <div>   
                    <h3 class="post-title">
                        Here's the best pizza delivery in Toronto.
                    </h3>
                    <p class="post-subtitle">
                        The best pizza delivery in Toronto can come to the rescue when it seems like all hope is lost. There's no reason to venture outside your front door when it comes to getting grease wheels from these reputable pizzerias.
                    </p>
                </div>
                <p class="post-meta">Posted by Yummy Pizza on August 14, 2020</p>
            </div>
            <hr>
            <div class="post-preview">
                <div>   
                    <h3 class="post-title">
                        Have you ever had Pizzette?
                    </h3>
                    <p class="post-subtitle">
                        A pizzetta is a small pizza that can range in size as a finger food at around three inches in diameter to that of a small personal-sized pizza.
                    </p>
                </div>
                <p class="post-meta">Posted by Yummy Pizza on July 22, 2020</p>
            </div>
            <hr>
            <div class="post-preview">
                <div>   
                    <h3 class="post-title">
                        Origins of the word Pizza
                    </h3>
                    <p class="post-subtitle">
                        The Lombardic word bizzo or pizzo meaning "mouthful" (related to the English words "bit" and "bite"), which was brought to Italy in the middle of the 6th century AD by the invading Lombards.
                    </p>
                </div>
                <p class="post-meta">Posted by Yummy Pizza on June 20, 2020</p>
            </div>
            <hr>
            <div class="clearfix">
            <a class="btn btn-primary float-right" href="{{ url('/menu')}}">Check out our Menu →</a>
            </div>
        </div>
    </div>
</div>
<br/>
<hr/>