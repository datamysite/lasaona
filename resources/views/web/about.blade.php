@extends('web.includes.master')
@section('content')

<section  class="header">
        
        @include('web.includes.header')

        <div class="sub-header-div text-center" style="background-image: url('{{URL::to('/public/images/home-bg.png')}}');">
            <div class="sub-header-content">
                <h1 class="text-white">About LOL – Let’s Off Leash</h1>
                <br>
                <p class="text-center"><strong>Where freedom meets storytelling</strong>, Let’s Off Leash is a space where real voices are heard and untold stories come to life. We go beyond entertainment—sharing honest, impactful narratives that inspire empathy, awareness, and change</p>
            </div>
        </div>
</section>

    <div class="container-fluid fh5co-about-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

    

                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <div>
                            <img src="{{URL::to('/')}}/public/images/ab1.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/ab2.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/ab3.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/about3.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="{{URL::to('/')}}/public/images/about2.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-us-content">
                        <h2>Our Journey: How LOL Junction Was Born</h2>
                        <p style="padding-left: 22px;">
                            LOL – "Let’s Off Leash" is more than a story podcast—it’s a storytelling movement rooted in empathy, curiosity, and freedom. Founded by Kasturi Jha, an Indian female podcaster, the idea came from a deep desire to give space to voices often ignored—both animal and human.
                            <br><br>
                            What started as a personal passion turned into a global platform, now home to over 250K loyal followers and 30K+ YouTube subscribers. Through her mic, Kasturi has built LOL Junction into a comedy podcast and story archive, filled with heartwarming human stories, heroic animal stories, and real talk from experts around the world.
                            <br><br>
                            Each episode on LOL follows a powerful narrative arc: Problem = Insight = Solution. Whether it’s a street dog rescue in India or a biologist uncovering climate truths, every story aims to educate, entertain, and inspire action.
                        </p>
                        <a href="https://www.youtube.com/@LetsOffLeash" class="read-more" target="_blank">Visit Channel</a>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid fh5co-news container-stiped">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{URL::to('/public/about1.png')}}" width="100%" alt="What we talk about">
                </div>

                <div class="col-md-7 text-left">
                    <h2 class="text-left">What We Talk About:</h2>
                    <p class="sub-heading">Real People. Real Animals. Real Talk.</p>
                    <p>LOL covers a wide range of themes across the podcast culture, blending comedy podcast moments with raw, impactful narratives. Our topics range from:</p>
                    <ul class="about-ul">
                        <li>
                            <strong>Pet podcasts</strong> filled with dog and cat rescue stories
                        </li>
                        <li>
                            <strong>Lifestyle and wellness episodes</strong> with veterinarians and healers
                        </li>
                        <li>
                            <strong>Entertainment podcast interviews</strong> with everyday heroes
                        </li>
                        <li>
                            Deep-dives into <strong>real talk</strong> on environmental change and human rights
                        </li>
                    </ul>
                    <p>
                        We’ve featured over 20 extraordinary guests: <strong>veterinarians, animal rescuers, scientists,</strong> and <strong>storytellers,</strong> all sharing what it means to live and work for a better world. These voices help fuel our <strong>LOL Junction</strong> mission—to let stories breathe, and <strong>let people and animals off the leash</strong> of judgment, stigma, or silence.
                        <br><br>
                        Whether you love funny pet antics, meaningful interviews, or crave an <strong>inspiring podcast</strong> on your morning walk, LOL is the <strong>audio show</strong> you’ve been waiting for.
                    </p>
                </div>
            </div>
            <br>
        </div>
    </div>



    <div class="container-fluid fh5co-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h2 class="text-left">Why It Matters:</h2>
                    <p class="sub-heading">Building a Global Storytelling Community</p>
                    <p>At LOL – Let’s Off Leash, storytelling is our tool for transformation. We’re not here to just make noise; we’re here to make impact. Our global reach spans communities in India, the UAE, the U.S., and beyond. With every download, every listen, and every share—you become part of something bigger.
                        <br><br>
                    We believe in the power of stories to heal, bridge gaps, and amplify truth. That’s why every episode is carefully crafted to build <strong>podcast engagement</strong>, nurture connections, and encourage solutions through storytelling. Whether you're a <strong>pet lover</strong>, a <strong>podcast listener</strong>, or someone looking for real, relatable content—LOL welcomes you.
                        <br><br>
                    Join the conversation. Explore the bond between animals and humans. And above all, <strong>let’s off leash together</strong>.</p>
                    <br>
                    <a href="https://www.youtube.com/@LetsOffLeash" class="read-more" target="_blank">Visit Channel</a>
                </div>

                <div class="col-md-6">
                    <img src="{{URL::to('/public/about2.png')}}" width="100%" alt="What we talk about">
                </div>

            </div>
            <br>
        </div>
    </div>
@endsection