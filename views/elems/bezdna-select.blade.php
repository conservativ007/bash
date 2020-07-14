<div class="select my-select">
  <ul>
    <li>
      <a class="@if(!empty($sort) && $sort == 'created_at') active @endif" href="{{route('bezdna')}}">
    новые
  </a>
  </li>
  <li>
    <a class="@if(!empty($sort) && $sort == 'liketop') active @endif" href="{{route('sorttop', [
    'item' => 'bezdna',
    'sort' => 'liketop',
    ])}}">топ</a>
  </li>
  <li>
    <a class="@if(!empty($sort) && $sort == 'likeforever') active @endif" href="{{route('sorttopforever', [
    'item' => 'bezdna',
    'sort' => 'likeforever',
    ])}}">лучшие</a>
  </li>
  </ul>
</div>
