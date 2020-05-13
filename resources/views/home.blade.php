@extends('layouts.app')

@section('content')
<link href="{{ asset('css/tube.css') }}" rel="stylesheet">

  <section class="content">
    <div class="content__left">
      <section class="navigation">
          <!-- Main -->
          <div class="navigation__list">
            <div class="navigation__list__header" 
                 role="button" 
                 data-toggle="collapse" 
                 href="#main" 
                 aria-expanded="true" 
                 aria-controls="main">
              Main <span class="caret"></span>
            </div>
            <div class="" id="main">
              <a href="#" class="navigation__list__item">
                <i class="fa fa-browser"></i>
                <span>Browse</span>
              </a>
  
              <a href="#" class="navigation__list__item">
                <i class="fa fa-heart"></i>
                <span>Activity</span>
              </a>
  
              <a href="#" class="navigation__list__item">
                <i class="fa fa-video"></i>
                <span>Video</span>
              </a>
              
            </div>
          </div>
          <!-- / -->
  
          <!-- Your Music -->
          <div class="navigation__list">
            <div class="navigation__list__header" 
                 role="button" 
                 data-toggle="collapse" 
                 href="#yourMusic" 
                 aria-expanded="true" 
                 aria-controls="yourMusic">
              Your Channels
            </div>
            
            <div class="collapse in" id="yourMusic">
              <a href="#" class="navigation__list__item">
                <i class="ion-headphone"></i>
                <span>Videos</span>
              </a>
  
              <a href="#" class="navigation__list__item">
                <i class="ion-ios-musical-notes"></i>
                <span>Package</span>
              </a>
  
              <a href="#" class="navigation__list__item">
                <i class="ion-person"></i>
                <span>Clientele</span>
              </a>
  
              <a href="#" class="navigation__list__item">
                <i class="ion-document"></i>
                <span>Sessions</span>
              </a>
            </div>
          </div>
          <!-- / -->
  
          <!-- Playlists -->
          <div class="navigation__list">
            <div class="navigation__list__header" 
                 role="button" 
                 data-toggle="collapse" 
                 href="#playlists" 
                 aria-expanded="true" 
                 aria-controls="playlists">
              Playlists
            </div>
            <div class="collapse in" id="playlists">
            
            </div>
          </div>
          <!-- / -->
        </section>
        
      <section class="playlist">
        <a href="#">
          <i class="ion-ios-plus-outline"></i>
          New Playlist
        </a>
      </section>
    </div>
    

    {{-- Middle / Centre Content --}}
    <div class="content__middle">
      <div class="artist is-verified">
        <div class="artist__header">
          <div class="artist__info">
            <div class="profile__img">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/g_eazy_propic.jpg" alt="G-Eazy" />
            </div>            
            <div class="artist__info__meta">
              <div class="artist__info__type">Trainer</div>
                <div class="artist__info__name">Trainer Viewed</div>
              <div class="artist__info__actions">
                <button class="button-dark">
                  <i class="ion-ios-play"></i>
                  Play
                </button>
                <button class="button-light">Follow</button>
                <button class="button-light more">
                  <i class="ion-ios-more"></i>
                </button>
              </div>
            </div>    
          </div>
          
          <div class="artist__listeners">
            <div class="artist__listeners__count">15,662,810</div>
            <div class="artist__listeners__label">Views</div>
          </div>
          
          <div class="artist__navigation">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#artist-overview" aria-controls="artist-overview" role="tab" data-toggle="tab">Overview</a>
              </li>
              <li role="presentation">
                <a href="#related-artists" aria-controls="related-artists" role="tab" data-toggle="tab">Related Trainers</a>
              </li>
              <li role="presentation">
                <a href="#artist-about" aria-controls="artist-about" role="tab" data-toggle="tab">About</a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="artist__content">
          <div class="tab-content">
            <!-- Overview -->
            <div role="tabpanel" class="tab-pane active" id="artist-overview">
              <div class="overview">
                <div class="overview__artist">
                  <!-- Latest Release-->
                  <div class="section-title">Latest Upload</div>
                  <div class="latest-release">
                    <div class="latest-release__art">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                    </div>
                    <div class="latest-release__song">
                      <div class="latest-release__song__title">Drifting (Track Commentary)</div>
                      <div class="latest-release__song__date">
                        <span class="day">4</span>
                        <span class="month">December</span>
                        <span class="year">2015</span>
                      </div>
                    </div>
                  </div>
                  <!-- / -->
  
                  <!-- Popular-->
                  <div class="section-title">Popular</div>
                  <div class="tracks">
                    <div class="track">
                      <div class="track__art">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                      </div>
                      <div class="track__number">1</div>
                      <div class="track__added">
                        <i class="ion-checkmark-round added"></i>
                      </div>
                      <div class="track__title">Me, Myself & I</div>
                      <div class="track__explicit">
                        <span class="label">Explicit</span>
                      </div>
                      <div class="track__plays">147,544,165</div>
                    </div>
                  </div>
                  <button class="show-more button-light">Show 5 More</button>
                  <!-- / -->
                </div>
              
                <div class="overview__related">
  
                  <div class="section-title">Related Trainers</div>
                  <div class="related-artists">
                    <a href="#" class="related-artist">
                      <span class="related-artist__img">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/hoodie.jpg" alt="Hoodie Allen" />
                      </span>
                      <span class="related-artist__name">Hoodie Allen</span>
                    </a>
                  </div>
                </div>
  
                <div class="overview__albums">
                  <div class="overview__albums__head">
                    <span class="section-title">Packages</span>
                  </div>
                  <div class="album">
                    <div class="album__info">
                      <div class="album__info__art">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                      </div>
                      <div class="album__info__meta">
                        <div class="album__year">2015</div>
                        <div class="album__name">Beginners Guide</div>
                        <div class="album__actions">
                          <button class="button-light save">Save</button>
                          <button class="button-light more">
                            <i class="ion-ios-more"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="album__tracks">
                      <div class="tracks">
                        <div class="tracks__heading">
                          <div class="tracks__heading__number">#</div>
                          <div class="tracks__heading__title">Videos</div>
                          <div class="tracks__heading__length">
                            <i class="ion-ios-stopwatch-outline"></i>
                          </div>
                          <div class="tracks__heading__popularity">
                            <i class="ion-thumbsup"></i>
                          </div>
                        </div>
  
                        <div class="track">
                          <div class="track__number">1</div>
                          <div class="track__added">
                            <i class="ion-checkmark-round added"></i>
                          </div>
                          <div class="track__title">Intro</div>
                          <div class="track__explicit">
                            <span class="label">Explicit</span>
                          </div>
                          <div class="track__length">1:11</div>
                          <div class="track__popularity">
                            <i class="ion-arrow-graph-up-right"></i>
                          </div>
                        </div>
                        
                        <div class="track">
                            <div class="track__number">1</div>
                            <div class="track__added">
                              <i class="ion-checkmark-round added"></i>
                            </div>
                            <div class="track__title">Intro</div>
                            <div class="track__explicit">
                              <span class="label">Explicit</span>
                            </div>
                            <div class="track__length">1:11</div>
                            <div class="track__popularity">
                              <i class="ion-arrow-graph-up-right"></i>
                            </div>
                        </div>
  
                      </div>
                      
                    </div>
                    
                  </div>
                  
                </div>
                
              </div>
            
            </div>
            <!-- / -->
  
            <!-- Related Trainers -->
            <div role="tabpanel" class="tab-pane" id="related-artists">
              <div class="media-cards">
                <div class="media-card">
                  <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/hoodie.jpg);">
                    <i class="ion-ios-play"></i>
                  </div>
                  <a class="media-card__footer">Hoodie Allen</a>
                </div>
                
              </div>
            
            </div>
            <!-- / -->
  
            <!-- About // Coming Soon-->
            <div role="tabpanel" class="tab-pane" id="artist-about">About</div>
            <!-- / -->
  
          </div>
          
        </div>
        
      </div>
      
    </div>
    
  </section>
@endsection
