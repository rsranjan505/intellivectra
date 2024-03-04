<style>
/* START TOOLTIP STYLES */
[tooltip] {
  position: relative;
  white-space: pre-line;/* opinion 1 */
}

/* Applies to all tooltips */
[tooltip]::before,
[tooltip]::after {
  text-transform: none; /* opinion 2 */
  font-size: .9em; /* opinion 3 */
  line-height: 1;
  user-select: none;
  pointer-events: none;
  position: absolute;
  display: none;
  opacity: 0;
}
[tooltip]::before {
  content: '';
  border: 5px solid transparent; /* opinion 4 */
  z-index: 1001; /* absurdity 1 */
}
[tooltip]::after {
  content: attr(tooltip); /* magic! */

  /* most of the rest of this is opinion */
  font-family: Helvetica, sans-serif;
  text-align: center;

  /*
    Let the content set the size of the tooltips
    but this will also keep them from being obnoxious
    */
  min-width: 3em;
  max-width: 21em;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  padding: 1ch 1.5ch;
  border-radius: .3ch;
  box-shadow: 0 1em 2em -.5em rgba(0, 0, 0, 0.35);
  background: #333;
  color: #fff;
  z-index: 1000; /* absurdity 2 */
}

/* Make the tooltips respond to hover */
[tooltip]:hover::before,
[tooltip]:hover::after {
  display: block;
}

/* don't show empty tooltips */
[tooltip='']::before,
[tooltip='']::after {
  display: none !important;
}

/* FLOW: UP */
[tooltip]:not([flow])::before,
[tooltip][flow^="up"]::before {
  bottom: 100%;
  border-bottom-width: 0;
  border-top-color: #333;
}
[tooltip]:not([flow])::after,
[tooltip][flow^="up"]::after {
  bottom: calc(100% + 5px);
}
[tooltip]:not([flow])::before,
[tooltip]:not([flow])::after,
[tooltip][flow^="up"]::before,
[tooltip][flow^="up"]::after {
  left: 50%;
  transform: translate(-50%, -.5em);
}

/* FLOW: DOWN */
[tooltip][flow^="down"]::before {
  top: 100%;
  border-top-width: 0;
  border-bottom-color: #333;
}
[tooltip][flow^="down"]::after {
  top: calc(100% + 5px);
}
[tooltip][flow^="down"]::before,
[tooltip][flow^="down"]::after {
  left: 50%;
  transform: translate(-50%, .5em);
}

/* FLOW: LEFT */
[tooltip][flow^="left"]::before {
  top: 50%;
  border-right-width: 0;
  border-left-color: #333;
  left: calc(0em - 5px);
  transform: translate(-.5em, -50%);
}
[tooltip][flow^="left"]::after {
  top: 50%;
  right: calc(100% + 5px);
  transform: translate(-.5em, -50%);
}

/* FLOW: RIGHT */
[tooltip][flow^="right"]::before {
  top: 50%;
  border-left-width: 0;
  border-right-color: #333;
  right: calc(0em - 5px);
  transform: translate(.5em, -50%);
}
[tooltip][flow^="right"]::after {
  top: 50%;
  left: calc(100% + 5px);
  transform: translate(.5em, -50%);
}

/* KEYFRAMES */
@keyframes tooltips-vert {
  to {
    opacity: .9;
    transform: translate(-50%, 0);
  }
}

@keyframes tooltips-horz {
  to {
    opacity: .9;
    transform: translate(0, -50%);
  }
}

/* FX All The Things */
[tooltip]:not([flow]):hover::before,
[tooltip]:not([flow]):hover::after,
[tooltip][flow^="up"]:hover::before,
[tooltip][flow^="up"]:hover::after,
[tooltip][flow^="down"]:hover::before,
[tooltip][flow^="down"]:hover::after {
  animation: tooltips-vert 300ms ease-out forwards;
}

[tooltip][flow^="left"]:hover::before,
[tooltip][flow^="left"]:hover::after,
[tooltip][flow^="right"]:hover::before,
[tooltip][flow^="right"]:hover::after {
  animation: tooltips-horz 300ms ease-out forwards;
}


</style>
<div class="container-fluid mb-4 bg-primary" data-wow-delay="0.2s" style="min-height: 690px;">
    <div class="container">
        <div class="text-center position-relative mx-auto pt-3">
            <h1 ><span class="text-primary">Services & </span>Solutions</h1>
            <hp class="mb-0">Empowering your digital journey: seamless solutions for every IT need.</hp>
        </div>

     {{-- <main> --}}
            {{-- <div>
              <span tooltip="I'm up above it!">Up</span>
            </div>
            <div>
              <span tooltip="Slide to the left" flow="left">Left</span>
              <h3 tooltip="Slide to the right" flow="right">Right</h3>
            </div>
            <div>
              <span  data-html="true" tooltip="Get Down. &#013 &#013; &#10; \\n &lt;br /&gt; coucou" flow="down">Down</span>
            </div> --}}
        {{-- </main> --}}
        <div class="row">
            <div class="col-lg-12 " data-wow-delay="0.9s">
                <div class="position-relative d-flex flex-column align-items-center justify-content-center pt-4 ">
                    <div class="d-flex flex-column align-items-center justify-content-center ">
                        <div class="ser-slice slice1 wow fadeInUp" data-wow-delay="0.1s" >
                            <img src="{{ asset('assets/img/service/1.svg')}}" >
                            <div class="titile slice1-text">
                                <h5 tooltip="Digital Services" flow="left" >Digital Services</h5>
                            </div>
                        </div>
                        <div class="ser-slice slice2 wow fadeInUp">
                            <img src="{{ asset('assets/img/service/2.svg')}}" >
                            <div class="titile slice2-text">
                                <h5 tooltip="Platform And Operation Services" flow="up">Platform And Operation Services</h5>
                            </div>
                        </div>
                        <div class="ser-slice slice3 wow fadeInUp">
                            <img src="{{ asset('assets/img/service/3.svg')}}" tooltip="Slide to the left" flow="left">
                            <div class="titile slice3-text">
                                <h5 tooltip="Security Services" flow="right">Security Services </h5>
                            </div>
                        </div>
                        <div class="ser-slice slice4 wow fadeInUp">
                            <img src="{{ asset('assets/img/service/4.svg')}}" >
                            <div class="titile slice4-text">
                                <h5 tooltip="Enterprise Application Services" flow="down">Enterprise Application Services</h5>
                            </div>
                        </div>
                        <div class="ser-slice slice5 wow fadeInUp">
                            <img src="{{ asset('assets/img/service/5.svg')}}" >
                            <div class="titile slice5-text">
                                <h5 tooltip="Consulting Services" flow="left">Consulting Services</h5>
                            </div>
                        </div>
                        <div class="ser-slice slice6 wow fadeInUp">
                            <img src="{{ asset('assets/img/service/6.svg')}}" >
                            <div class="titile slice6-text">
                                <h5 tooltip="Staffing Services" flow="right">Staffing Services</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
