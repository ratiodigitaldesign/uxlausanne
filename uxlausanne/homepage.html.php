<?php $this->includeSnippet('header'); ?>

<div class="about title-section section">
    <div class="container section-title">
        <h1>What is UX Lausanne</h1>
    </div>
    <div class="isolated">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 text-center">
                        <h2>UX Lausanne is a 2 day conference in Lausanne, Switzerland, about creating delightful User Experiences.
                        </h2>
                        <div class="isolated"><hr class="hidden-xs"></div>
                        
                            <p>After 2 years of monthly UX Romandie meetups, UX Lausanne will take place for the first time in 2014. The 2 day format will bring together local & international UX professionals to share knowledge and gain expertise in the User Experience field. The conference will be held at Arsenic Theater, one of Lausanne's most vibrant cultural spots.</p>
                            <p>UX Lausanne is the first event in western Switzerland dedicated to User Experience Design. We look forward to connecting you with some of the most influential UX practitioners, thought leaders, talented developers and innovative designers.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="speaker inverse-section section">
    <div class="container section-title">
        <h1>Some of our inspiring speakers</h1>
    </div>
    <div class="isolated">
        <div class="isolated">
            <div class="container">
                <div class="row">
                    {% for speaker in speakers %}
                        <div class="col-xs-12 col-sm-3 text-center">
                            <div class="isolated">
                                <img src="assets/img/{{ speaker.photo }}" alt="{{ speaker.name }}" class="img-responsive thumbnail text-center">
                            <h3>{{ speaker.name }}</h3>
                            <h4>
                                <a href="https://twitter.com/{{ speaker.twitter }}">@{{ speaker.twitter }}</a>
                                <br/>
                                <a href="{{ speaker.url }}">{{ speaker.site }}</a>
                            </h4>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <div class="row">
                    <div class="col-xs-12"><h3 class="text-center">More to come soon...</h3></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="team section">
    <div class="container section-title">
        <a name="about"></a>
        <h1>About UX Romandie</h1>
    </div>
    <div class="isolated">
        <div class="container">
            <div class="row">
                {% for member in team %}
                    <div class="col-xs-6 col-sm-4 col-md-2 text-center">
                        <div class="isolated">
                            <img src="assets/img/{{ member.photo }}" alt="{{ member.name }}" class="img-responsive thumbnail">
                            <h3>{{ member.name }}</h3>
                            <h4>
                                <a href="https://twitter.com/{{ member.twitter }}">@{{ member.twitter }}</a>
                            </h4>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>

<?php $this->includeSnippet('footer'); ?>