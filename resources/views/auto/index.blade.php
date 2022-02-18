<x-ship-group-layout
	:title="$title"
	:ships="$ships"
	:pirated="$pirated ?? true"
	:groupLayout="true"
>

<p>Automated ships never surrender and do not run from fights, unless they are running at the start. They take 40 seconds to escape and double the Fleet pursuit.</p>

<p>They repair all systems simultaneously, taking 37.5 seconds each bar. They cannot repair a breached system. They <strong>always</strong> have manning bonuses, unless the system is damaged.</p>

</x-ship-group-layout>