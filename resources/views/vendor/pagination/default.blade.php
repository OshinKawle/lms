  @if ($paginator->hasPages())

         <!--  <nav aria-label="Page navigation example"> -->
              <ul class="pagination round-pagination justify-content-center">
                 @if ($paginator->onFirstPage())
                  <li class="page-item"><a class="page-link" href="javascript:;">{!! __('pagination.previous') !!}</a>
                  </li>
                  @else
                  <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">{!! __('pagination.previous') !!}</a>
                  </li>
                  @endif

                     @foreach ($elements as $key=>$element)
                      @if (is_array($element))
                        @foreach ($element as $page => $url)
                          @if ($page == $paginator->currentPage())
                            <li class="page-item {{$page == $paginator->currentPage() ? 'active' : ''}}"><a class="page-link" href="{{ $url }}">{{$page}}</a>
                            </li>
                          @else
                          
                          <li class="page-item "><a class="page-link " href="{{ $url }}">{{$page}}</a>
                            </li>
                          @endif
                        @endforeach
                      @endif
                     @endforeach
                   @if ($paginator->hasMorePages())
                   <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">{!! __('pagination.next') !!}</a>
                  </li>
                   @else
                     <li class="page-item"><a class="page-link" href="javascript:;">{!! __('pagination.next') !!}</a>
                  </li>
                   @endif
                  
              </ul>
          <!-- </nav> -->
          
 

  @endif