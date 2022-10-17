@props([
    // parent title
    'title' => '',
    // parent icon
    'icon' => '',
    // list childs
    'childs' => [],
    // 'childs' => [
    //    '1' => [
    //    'title' => 'one',
    //    'icon'  => 'oneIcon',
    //    'url'   => 'oneUrl',
    //    'class' => 'oneClass',
    //  ]
    ],

    // additional css
    'class' => '',
])

<ul class="{{$class}}">
  @foreach($childs as $child)
    <li class>
    </li>
  @endforeach
</ul>
