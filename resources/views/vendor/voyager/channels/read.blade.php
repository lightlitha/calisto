@extends('voyager::master')

<link href="{{ asset('css/tube.css') }}" rel="stylesheet">

{{-- @section('page_title', __('voyager::generic.view').' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i> {{ __('voyager::generic.viewing') }} {{ ucfirst($dataType->getTranslatedAttribute('display_name_singular')) }} &nbsp;

        @can('edit', $dataTypeContent)
            <a href="{{ route('voyager.'.$dataType->slug.'.edit', $dataTypeContent->getKey()) }}" class="btn btn-info">
                <span class="glyphicon glyphicon-pencil"></span>&nbsp;
                {{ __('voyager::generic.edit') }}
            </a>
        @endcan
        @can('delete', $dataTypeContent)
            @if($isSoftDeleted)
                <a href="{{ route('voyager.'.$dataType->slug.'.restore', $dataTypeContent->getKey()) }}" title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore" data-id="{{ $dataTypeContent->getKey() }}" id="restore-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.restore') }}</span>
                </a>
            @else
                <a href="javascript:;" title="{{ __('voyager::generic.delete') }}" class="btn btn-danger delete" data-id="{{ $dataTypeContent->getKey() }}" id="delete-{{ $dataTypeContent->getKey() }}">
                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">{{ __('voyager::generic.delete') }}</span>
                </a>
            @endif
        @endcan

        <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
            <span class="glyphicon glyphicon-list"></span>&nbsp;
            {{ __('voyager::generic.return_to_list') }}
        </a>
    </h1>
    @include('voyager::multilingual.language-selector')
@stop --}}

@section('content')



<div class="channel_content">
    <div class="artist is-verified">
        @foreach($dataType->readRows as $row)
            @if($row->field == "cover")
                <div class="artist__header" style="background-image: url({{ filter_var( str_replace('\\', '/', $dataTypeContent->{$row->field}), FILTER_VALIDATE_URL) ?  str_replace('\\', '/', $dataTypeContent->{$row->field}) : Voyager::image( str_replace('\\', '/', $dataTypeContent->{$row->field})) }});">
                @break
            @endif
        @endforeach
        <div class="artist__info">
            <div class="profile__img">
                @foreach($dataType->readRows as $row)
                    @if($row->field == "avatar")
                        <img src="{{ filter_var( str_replace('\\', '/', $dataTypeContent->{$row->field}), FILTER_VALIDATE_URL) ?  str_replace('\\', '/', $dataTypeContent->{$row->field}) : Voyager::image( str_replace('\\', '/', $dataTypeContent->{$row->field})) }}">
                        @break
                    @endif
                @endforeach
            </div>            
            <div class="artist__info__meta">
              <div class="artist__info__type">Channel</div>
                @foreach($dataType->readRows as $row)
                    @if($row->field == "name")
                        <div class="artist__info__name">{{ $dataTypeContent->{$row->field} }}</div>
                        @break
                    @endif
                @endforeach
            </div>    
        </div>
        
        <div class="artist__listeners">
          <div class="artist__listeners__count">0</div>
          <div class="artist__listeners__label">Subscribers</div>
        </div>
        
        <div class="artist__navigation">
          <ul class="nav nav-tabs" style="background: rgba(24, 24, 24, .6);" role="tablist">
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
                        @foreach($dataType->readRows as $row)
                            @if($row->type == 'relationship')
                                @include('voyager::formfields.relationship', ['view' => 'read', 'options' => $row->details])
                                {{-- @php echo print_r($row->details); @endphp --}}
                            @endif
                        @endforeach
                        {{-- <div class="latest-release__art">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/whenDarkOut.jpg" alt="When It's Dark Out" />
                        </div>
                        <div class="latest-release__song">
                            <div class="latest-release__song__title">Drifting (Track Commentary)</div>
                                <div class="latest-release__song__date">
                                <span class="day">4</span>
                                <span class="month">December</span>
                                <span class="year">2015</span>
                            </div>
                        </div> --}}
                    </div>
                    <!-- / -->

                    <!-- Popular-->
                    <div class="section-title">Popular</div>
                    @foreach($dataType->readRows as $row)
                        @if($row->type == 'relationship')
                            @include('voyager::formfields.relationship', ['view' => 'read', 'options' => $row->details])
                            {{-- @php echo print_r($row->details); @endphp --}}
                        @endif
                    @endforeach
                    {{-- <div class="tracks">
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
                    <button class="show-more button-light">Show 5 More</button> --}}
                    <!-- / -->
                </div>
            
              <div class="overview__related">

                <div class="section-title">Related Trainers</div>
                @foreach($dataType->readRows as $row)
                    @if($row->type == 'relationship')
                        @include('voyager::formfields.relationship', ['view' => 'read', 'options' => $row->details])
                        {{-- @php echo print_r($row->details); @endphp --}}
                    @endif
                @endforeach
                {{-- <div class="related-artists">
                  <a href="#" class="related-artist">
                    <span class="related-artist__img">
                      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/hoodie.jpg" alt="Hoodie Allen" />
                    </span>
                    <span class="related-artist__name">Hoodie Allen</span>
                  </a>
                </div> --}}
              </div>

              <div class="overview__albums">
                <div class="overview__albums__head">
                  <span class="section-title">Packages</span>
                </div>
                @foreach($dataType->readRows as $row)
                    @if($row->type == 'relationship')
                        @include('voyager::formfields.relationship', ['view' => 'read', 'options' => $row->details])
                        {{-- @php echo print_r($row->details); @endphp --}}
                    @endif
                @endforeach
                {{-- <div class="album">
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
                  
                </div> --}}
              </div>
            </div>
          
          </div>
          <!-- / -->

          <!-- Related Trainers -->
          <div role="tabpanel" class="tab-pane" id="related-artists">
            <div class="media-cards">
                @foreach($dataType->readRows as $row)
                    @if($row->type == 'relationship')
                        @include('voyager::formfields.relationship', ['view' => 'read', 'options' => $row->details])
                        {{-- @php echo print_r($row->details); @endphp --}}
                    @endif
                @endforeach
              {{-- <div class="media-card">
                <div class="media-card__image" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/7022/hoodie.jpg);">
                  <i class="ion-ios-play"></i>
                </div>
                <a class="media-card__footer">Hoodie Allen</a>
              </div> --}}
            </div>
          </div>
          <!-- / -->

          <!-- About // Coming Soon-->
          <div role="tabpanel" class="tab-pane" id="artist-about">
            @foreach($dataType->readRows as $row)
                @if($row->field == "name")
                <div class="tracks">
                    <div class="track">
                        <div class="track__art">
                            <span></span>
                        </div>
                        <div class="track__added">
                            <i class="ion-checkmark-round added"></i>
                        </div>
                        <div class="track__title">{{ $dataTypeContent->{$row->field} }}</div>
                    </div>
                </div>
                @elseif($row->field == "description")
                    <p> {{ $dataTypeContent->{$row->field} }} </p>
                @endif
            @endforeach
          </div>
          <!-- / -->
        </div>
      </div>
    </div>
  </div>













    {{-- <div class="page-content read container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered" style="padding-bottom:5px;">
                    <!-- form start -->
                    @foreach($dataType->readRows as $row)
                        @php
                        if ($dataTypeContent->{$row->field.'_read'}) {
                            $dataTypeContent->{$row->field} = $dataTypeContent->{$row->field.'_read'};
                        }
                        @endphp
                        <div class="panel-heading" style="border-bottom:0;">
                            <h3 class="panel-title">{{ $row->getTranslatedAttribute('display_name') }}</h3>
                        </div>

                        <div class="panel-body" style="padding-top:0;">
                            @if (isset($row->details->view))
                                @include($row->details->view, ['row' => $row, 'dataType' => $dataType, 'dataTypeContent' => $dataTypeContent, 'content' => $dataTypeContent->{$row->field}, 'action' => 'read', 'view' => 'read', 'options' => $row->details])
                            @elseif($row->type == "image")
                                <img class="img-responsive"
                                     src="{{ filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL) ? $dataTypeContent->{$row->field} : Voyager::image($dataTypeContent->{$row->field}) }}">
                            @elseif($row->type == 'multiple_images')
                                @if(json_decode($dataTypeContent->{$row->field}))
                                    @foreach(json_decode($dataTypeContent->{$row->field}) as $file)
                                        <img class="img-responsive"
                                             src="{{ filter_var($file, FILTER_VALIDATE_URL) ? $file : Voyager::image($file) }}">
                                    @endforeach
                                @else
                                    <img class="img-responsive"
                                         src="{{ filter_var($dataTypeContent->{$row->field}, FILTER_VALIDATE_URL) ? $dataTypeContent->{$row->field} : Voyager::image($dataTypeContent->{$row->field}) }}">
                                @endif
                            @elseif($row->type == 'relationship')
                                 @include('voyager::formfields.relationship', ['view' => 'read', 'options' => $row->details])
                            @elseif($row->type == 'select_dropdown' && property_exists($row->details, 'options') &&
                                    !empty($row->details->options->{$dataTypeContent->{$row->field}})
                            )
                                <?php echo $row->details->options->{$dataTypeContent->{$row->field}};?>
                            @elseif($row->type == 'select_multiple')
                                @if(property_exists($row->details, 'relationship'))

                                    @foreach(json_decode($dataTypeContent->{$row->field}) as $item)
                                        {{ $item->{$row->field}  }}
                                    @endforeach

                                @elseif(property_exists($row->details, 'options'))
                                    @if (!empty(json_decode($dataTypeContent->{$row->field})))
                                        @foreach(json_decode($dataTypeContent->{$row->field}) as $item)
                                            @if (@$row->details->options->{$item})
                                                {{ $row->details->options->{$item} . (!$loop->last ? ', ' : '') }}
                                            @endif
                                        @endforeach
                                    @else
                                        {{ __('voyager::generic.none') }}
                                    @endif
                                @endif
                            @elseif($row->type == 'date' || $row->type == 'timestamp')
                                @if ( property_exists($row->details, 'format') && !is_null($dataTypeContent->{$row->field}) )
                                    {{ \Carbon\Carbon::parse($dataTypeContent->{$row->field})->formatLocalized($row->details->format) }}
                                @else
                                    {{ $dataTypeContent->{$row->field} }}
                                @endif
                            @elseif($row->type == 'checkbox')
                                @if(property_exists($row->details, 'on') && property_exists($row->details, 'off'))
                                    @if($dataTypeContent->{$row->field})
                                    <span class="label label-info">{{ $row->details->on }}</span>
                                    @else
                                    <span class="label label-primary">{{ $row->details->off }}</span>
                                    @endif
                                @else
                                {{ $dataTypeContent->{$row->field} }}
                                @endif
                            @elseif($row->type == 'color')
                                <span class="badge badge-lg" style="background-color: {{ $dataTypeContent->{$row->field} }}">{{ $dataTypeContent->{$row->field} }}</span>
                            @elseif($row->type == 'coordinates')
                                @include('voyager::partials.coordinates')
                            @elseif($row->type == 'rich_text_box')
                                @include('voyager::multilingual.input-hidden-bread-read')
                                {!! $dataTypeContent->{$row->field} !!}
                            @elseif($row->type == 'file')
                                @if(json_decode($dataTypeContent->{$row->field}))
                                    @foreach(json_decode($dataTypeContent->{$row->field}) as $file)
                                        <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($file->download_link) ?: '' }}">
                                            {{ $file->original_name ?: '' }}
                                        </a>
                                        <br/>
                                    @endforeach
                                @else
                                    <a href="{{ Storage::disk(config('voyager.storage.disk'))->url($row->field) ?: '' }}">
                                        {{ __('voyager::generic.download') }}
                                    </a>
                                @endif
                            @else
                                @include('voyager::multilingual.input-hidden-bread-read')
                                <p>{{ $dataTypeContent->{$row->field} }}</p>
                            @endif
                        </div><!-- panel-body -->
                        @if(!$loop->last)
                            <hr style="margin:0;">
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div> --}}

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('voyager.'.$dataType->slug.'.index') }}" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                               value="{{ __('voyager::generic.delete_confirm') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    @if ($isModelTranslatable)
        <script>
            $(document).ready(function () {
                $('.side-body').multilingual();
            });
        </script>
    @endif
    <script>
        var deleteFormAction;
        $('.delete').on('click', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });

    </script>
@stop
