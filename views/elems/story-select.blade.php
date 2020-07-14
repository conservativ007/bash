<div class="select my-select">
  <ul>
    <li>
      <a class="@if(!empty($sort) && $sort == 'created_at') active @endif" href="{{route('new')}}">
    новые
  </a>
  </li>
  <li>
    <a class="@if(!empty($sort) && $sort == 'liketop') active @endif" href="{{route('sorttop', [
    'item' => 'story',
    'sort' => 'liketop',
    ])}}">топ</a>
  </li>
  <li>
    <a class="@if(!empty($sort) && $sort == 'likeforever') active @endif" href="{{route('sorttopforever', [
    'item' => 'story',
    'sort' => 'likeforever',
    ])}}">лучшие</a>
  </li>
  </ul>
</div>
