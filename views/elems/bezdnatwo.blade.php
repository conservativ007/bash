  <div class="d-flex justify-content-center">
    @if($item == 'story')
      {{$elems->links()}}
    @endif
  </div>

  @if($item == 'bezdna' && $sort == 'likeforever')
  <div class="card my-info-likeforever">
    Это раздел в котором находятся все записи из бездны не попавшие в основную ленту)
  </div>
  @endif
<div class="m-auto" style="width: 600px;">
  @foreach($elems as $elem)
  <div class="card">
    <div class="info">
      <span>
        #{{$elem->name}}
      </span>
      <span>
        {{
        date('F, d Y', mktime(0,0,0,
        substr($elem->created_at, 5, 2),
        substr($elem->created_at, 8, 2),
        substr($elem->created_at, 0, 4)))
        }}
      </span>
    </div>
      <p class="card-text">
        {{$elem->text}}
      </p>
      @if(!empty($key))
        @if($elem->accordion > 3)
          <span class="accordion">
            попахивает боянчиком:)
            {{$elem->accordion}}
          </span>
        @endif
      @endif
      @if(!empty($key))
      <a href="{{route('redact', [
      'id'   => $elem->id,
      'item' => $item,
      ])}}">редактировать</a>
      @endif

<div class="container d-flex justify-content-between">
  <a href="{{route('accordion', [
  'id'   => $elem->id,
  'item' => $item,
  ])}}">
    <img src="{{asset('ikons/icons8-головоломка-64.png')}}" style="width: 20px;" data-toggle="tooltip" data-placement="right" title="это баян!">
  </a>
  <div class="container d-flex justify-content-between"
  style="width: 120px;">
    <a href="/bezdna/like{{$elem->id}}/0/{{$item}}">
      <img src="{{asset('ikons/icons8-минус-24.png')}}" alt="" style="width: 20px;">
    </a>
    <!-- если дата добавления являеться сегодняшней то результаты лайков не показываются дабы избежать предвзятости -->
    @if($item == 'bezdna')
      @if(substr($elem->created_at, 0, 10) == $datenow)
        ?
      @else
        {{$elem->like}}
      @endif
    @else
      {{$elem->like}}
    @endif

    <a href="/bezdna/like{{$elem->id}}/1/{{$item}}">
      <img src="{{asset('ikons/icons8-плюс-24.png')}}" alt="" style="width: 20px;">
    </a>
  </div>

<!-- блок поделиться -->
<div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="{{asset('ikons/icons8-бумажный-самолетик-сообщение-64.png')}}" alt="" style="width: 25px;">
    </a>

    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <script type="text/javascript">
        document.write(VK.Share.button(false,{type: "custom", text: "<img src=\"https://vk.com/images/share_32.png\" width=\"32\" height=\"32\" />"}));
      </script>
    </div>
</div>

</div>

  </div>
  @endforeach
</div>
<div class="d-flex justify-content-center">

    {{$elems->links()}}

</div>
