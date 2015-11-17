<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-2">
                    <h3>Location</h3>
                    <p>Kingston<br>Ontario, Canada</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/tutelagesystems" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/tutelagesystems" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/user/tutelagesystems" class="btn-social btn-outline"><i class="fa fa-fw fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="mailto:michael.mcmullen@tutelagesystems.com" class="btn-social btn-outline"><i class="fa fa-fw fa-envelope"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-3">
                    <h3>Like what you're reading?</h3>
                    <p>
                        Follow me on twitter <a href="https://twitter.com/tutelagesystems">@tutelagesystems</a>
                    </p>
                </div>
                <div class="footer-col col-md-3">
                    <h3>Subscribe</h3>
                    <a href="{{ URL::route('rss') }}" class="btn-social btn-outline"><i class="fa fa-fw fa-rss"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Tutelage Systems {{ date('Y') }}
                </div>
            </div>
        </div>
    </div>
</footer>