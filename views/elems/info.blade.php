@if(isset($item) && isset($info))
  @if($item == 'story' && $info == true)
    <div class="my-info">
      <div>
        Утверждено {{isset($countAll) ? $countAll : ''}} цитаты, сегодня {{isset($countDay) ? $countDay : ''}}. Ждут очереди в Бездне {{isset($countBezdna) ? $countBezdna : ''}} цитат.
      </div>
    </div>
  @endif
@endif

@if(!empty($sort) && !empty($item))
  @if($sort == 'liketop' && $item == 'story')
    <div class="my-info">
      <div>
        Топ цитат месяца
      </div>
    </div>
  @endif
@endif

@if(!empty($sort) && !empty($item))
  @if($sort == 'likeforever' && $item == 'story')
    <div class="my-info">
      <div>
        Лучшее за всё время
      </div>
    </div>
  @endif
@endif
