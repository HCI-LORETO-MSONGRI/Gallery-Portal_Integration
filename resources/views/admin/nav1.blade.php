<center style="cursor: none;">
    <img class="m-auto img img-responsive" height="100em" width="100em"
                    src="{{ asset('msongari/logobadge.png') }}" alt="LCM">
    <h4>Welcome 
		@guest 
			Guest 
		@else 
			<strong class="text-primary"> 
				{{ Auth::user()->name }}
			</strong>
		@endguest
	</h4>
</center>
<ul class="navbar-nav">
	<li>
		<a href="\"><small class="fas fa-home"></small> Home</a>
	</li>
	<li>
		<a href="\students\create"><small class="fas fa-user-plus"></small> Register Student</a>
	</li>
	<li>
		<a href="calendar"><small class="fas fa-calendar-times"></small> Update Calendar</a>
	</li>
	<li>
		<a href="\galleries\create"><small class="fas fa-photo-video"></small> Update Gallery</a>
	</li>
	<li>
		<a href="feeStructure"><small class="fas fa-file-pdf"></small> Update Fee Structure</a>
	</li>
</ul>





