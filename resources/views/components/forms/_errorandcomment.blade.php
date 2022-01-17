@if( $errors->first($name) )
    <span class="text-red-400 ml-2 text-sm">
        <i class="fas fa-exclamation-triangle"></i>&nbsp;
        {{ $errors->first($name) }}
    </span>
@elseif( $comment ?? null)
    <span class="text-gray-400 ml-2 text-sm">
         {!! $comment ?? '' !!}
    </span>
@endif
