@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://d33wubrfki0l68.cloudfront.net/6d7593bfbd7f2d5f45bc833775cc2534936d4faa/80ed0/images/logo-icon.png" class="logo" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
