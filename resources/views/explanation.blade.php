<x-general-layout title="Site explanation">

<h1>Site explanation</h1>

<p>This site lets you look up detailed information about enemy ships. Credit to these posts by <a href="https://www.reddit.com/r/ftlgame/comments/ce5lxn/enemy_system_levels_spreadsheet/">mekloz</a> and <a href="https://www.reddit.com/r/ftlgame/comments/qu8kz7/details_on_enemy_ship_generation/">mathchamp</a> for making it possible.</p>

<p>Some of the interactions may not be obvious. Here is a video demo:</p>

<iframe width="560" height="315" src="https://www.youtube.com/embed/mFf5gJgIvH4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<h2>Practical sector limits</h2>

<p>I’ve chosen to remove data that can never be seen in the game, as I think that makes it easier to digest.</p>

<p>For example, a Mantis Aggressor is not allowed to spawn until sector 5. So for that ship, I don’t show the theoretical data for earlier sectors.</p>

<p>Contrast this with a Mantis Bomber. That ship can appear as early as sector 2, because there is one event that forces it to spawn. So for this ship, I show the data from sector 2 onwards.</p>

<h2 id="minimums">System levels can go lower than minimum</h2>

<p>You can click on systems to see their minimum and maximum values.</p>

<p>The maximum is never exceeded, but sometimes the minimum is not reached. This happens because there is also an overall system budget for the ship. Each system is rolled independently, and if too many systems roll high values, the ship may run out of budget to upgrade them all.</p> 

<p>For example, I’ve seen Lanius Bombers in sector 7 with only two shields. That’s happening because they have lots of systems using up the overall budget.</p>

<p>Ideally I would account for this, but honestly it’s just too difficult. I think for practical purposes, we’re mostly concerned about the maximum values anyway. Consider the minimums an expectation not a guarantee.</p>

</x-general-layout>