@props(['author', 'size'])
@php
   switch ($size ?? null) {
        case 'xs':
            $imageSize = 'w-7 h-7';
            $textSize = 'text-xs';
            break;
        case 'sm':
            $imageSize = 'w-9 h-9';
            $textSize = 'text-sm';
            break;
        case 'md':
            $imageSize = 'w-10 h-10';
            $textSize = 'text-base';
            break;
        case 'lg':
            $imageSize = 'w-13 h-13';
            $textSize = 'text-lg';
            break;
        default:
            $imageSize = $textSize = 'w-10 h-10 text-base';
    
    }

@endphp
<img class="w-7 h-7 rounded-full mr-3" src="{{$author->profile_photo_url}}" alt="{{$author->profile_photo_url}}">
 <span class="mr-1 text-xs">{{$author->name}}</span>
