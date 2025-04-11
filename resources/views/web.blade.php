<!DOCTYPE html>
<html ⚡>
  <head>
    <meta charset="utf-8" />
    <title>Joy of Pets</title>
    <link rel="canonical" href="{{route('home')}}" />
    <meta
      name="viewport"
      content="width=device-width,minimum-scale=1,initial-scale=1"
    />

    <!-- Take note of the unique scripts used here. Most, if not all Web Stories will require the first two scripts. -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <script
      async
      custom-element="amp-story"
      src="https://cdn.ampproject.org/v0/amp-story-1.0.js"
    ></script>

    <!-- This script specifically enables any embedded video content to render correctly on a Web Story. -->
    <script
      async
      custom-element="amp-video"
      src="https://cdn.ampproject.org/v0/amp-video-0.1.js"
    ></script>

    <style amp-boilerplate>
      body {
        -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      }
      @-webkit-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-moz-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-ms-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @-o-keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
      @keyframes -amp-start {
        from {
          visibility: hidden;
        }
        to {
          visibility: visible;
        }
      }
    </style>
    <noscript
      ><style amp-boilerplate>
        body {
          -webkit-animation: none;
          -moz-animation: none;
          -ms-animation: none;
          animation: none;
        }
      </style></noscript
    >
    <link
      href="https://fonts.googleapis.com/css?family=Oswald:200,300,400"
      rel="stylesheet"
    />
    <style amp-custom>
      amp-story {
        font-family: "Oswald", sans-serif;
        color: #fff;
      }
      amp-story-page {
        background-color: #000;
      }
      h1 {
        font-weight: bold;
        font-size: 2.875em;
        font-weight: normal;
        line-height: 1.174;
      }
      p {
        font-weight: normal;
        font-size: 1.3em;
        line-height: 1.5em;
        color: #fff;
      }
      q {
        font-weight: 300;
        font-size: 1.1em;
      }
      amp-story-grid-layer.bottom {
        align-content: end;
      }
      amp-story-grid-layer.noedge {
        padding: 0px;
      }
      amp-story-grid-layer.center-text {
        align-content: center;
      }
      .wrapper {
        display: grid;
        grid-template-columns: 50% 50%;
        grid-template-rows: 50% 50%;
      }
      .banner-text {
        text-align: center;
        background-color: #000;
        line-height: 2em;
      }
    </style>
  </head>

  <body>
    <!-- Everything else is included inside the single child of the body element -- amp-story. -->
    <!-- Four attributes are required for stories to be discovered on the web. Title, publisher name, publisher logo, and poster image. -->
    <amp-story
    standalone
    title="Women's Health & Wellness"
    publisher="Dr. Ila Gupta"
    publisher-logo-src="assets/AMP-Brand-White-Icon.svg"
    poster-portrait-src="{{ asset('assets/img/home2/home2-about-img1.png')}}"
  >

    <!-- Cover page -->
    <amp-story-page id="cover">
      <amp-story-grid-layer template="fill">
        <amp-img
          src="{{ asset('assets/img/home2/home2-about-img1.png')}}"
          width="720"
          height="1280"
          layout="responsive"
        >
        </amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical">
        <h1>Women's Health & Wellness</h1>
        <p>By Dr. Ila Gupta</p>
      </amp-story-grid-layer>
    </amp-story-page>

    <!-- Page 1: Fertility Care -->
    <amp-story-page id="page1">
      <amp-story-grid-layer template="vertical">
        <h1>Fertility & IVF</h1>
        <amp-img
          src="{{ asset('assets/img/home2/1.png') }}"
          width="720"
          height="1280"
          layout="responsive"
        >
        </amp-img>
        <q>"Helping couples achieve parenthood through advanced fertility treatments."</q>
      </amp-story-grid-layer>
    </amp-story-page>

    <!-- Page 2: Pregnancy Care -->
    <amp-story-page id="page2">
      <amp-story-grid-layer template="fill">
        <amp-img
          src="{{ asset('assets/img/home2/2.png') }}"
          width="720"
          height="1280"
          layout="responsive"
        >
        </amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="thirds">
        <h1 grid-area="upper-third">Pregnancy & Maternal Care</h1>
        <p grid-area="lower-third">
          Comprehensive prenatal and postnatal care to ensure a safe and healthy pregnancy journey.
        </p>
      </amp-story-grid-layer>
    </amp-story-page>

    <!-- Page 3: Women's Health -->
    <amp-story-page id="page3">
      <amp-story-grid-layer template="fill">
        <amp-img
          src="{{ asset('assets/img/home2/3.png') }}"
          width="720"
          height="1280"
          layout="responsive"
        >
        </amp-img>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical">
        <h1>Women's Health & Wellness</h1>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" class="bottom">
        <q>"Empowering women with expert gynecological and hormonal health care."</q>
      </amp-story-grid-layer>
    </amp-story-page>

    <!-- Page 4: Video Section -->
    <amp-story-page id="page4">
      <amp-story-grid-layer template="fill">
        <amp-video
          autoplay
          loop
          width="720"
          height="1280"
          poster=""
          layout="responsive"
        >
          <source src="{{asset('assets/video/video.mp4')}}" type="video/mp4"/>
        </amp-video>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical">
        {{-- <h1>Holistic Approach to Women's Health</h1> --}}
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" class="bottom">
        <p>
          Providing compassionate, evidence-based care for all stages of a woman’s life.
        </p>
      </amp-story-grid-layer>
    </amp-story-page>

    <!-- Page 5: Final Message -->
    <amp-story-page id="page5">
      <amp-story-grid-layer template="fill">
        <div class="wrapper">
          <amp-img
            src="{{ asset('assets/img/home2/3.png') }}"
            width="720"
            height="1280"
            layout="responsive"
            
          >
          </amp-img>
          <amp-img
            src="{{ asset('assets/img/home2/2.png') }}"
            width="720"
            height="1280"
            layout="responsive"
            
          >
          </amp-img>
          <amp-img
            src="{{ asset('assets/img/home2/1.png') }}"
            width="720"
            height="1280"
            layout="responsive"
            
          >
          </amp-img>
          <amp-img
            src="{{ asset('assets/img/home2/4.png') }}"
            width="720"
            height="1280"
            layout="responsive"
            
          >
          </amp-img>
        </div>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical">
        <h1>Women's Health & Wellness</h1>
      </amp-story-grid-layer>
      <amp-story-grid-layer template="vertical" class="center-text">
        <p class="banner-text" animate-in="whoosh-in-right">
          Your health is our priority. Book a consultation today!
        </p>
      </amp-story-grid-layer>
    </amp-story-page>

    <!-- Bookend -->
    <amp-story-bookend src="bookend.json" layout="nodisplay">
    </amp-story-bookend> 
</amp-story>

  </body>
</html>