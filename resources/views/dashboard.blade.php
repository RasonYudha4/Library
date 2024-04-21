<x-app-layout>
@section('content')
    <section class="min-h-screen px-4 relative">
        <div class="absolute h-full w-full bg-gradient-to-r from-black to-grey-400 from-40% opacity-15"></div>
        <img src="{{ URL('images/background.jpg')}}" alt="" class="rounded-lg z-1">
        <div class="bg-transparent absolute max-w-[35%] max-h-4 top-1/3 left-1/4 transform -translate-x-1/2 -translate-y-1/2 text-9xl font-extrabold text-[#f7a317] text-shadow-md">KNOWLEDGE IS POWER </div>
    </section>

    <section class="p-8 min-h-screen w-full">
        <div class="m-10 text-center">
            <h3 class="text-[#f7f7f7] font-semibold text-6xl">World's <span class="text-[#f7a317]">Widest</span> and <span class="text-[#f7a317]">Supportive</span> Library Community </h3>
            <h4 class="text-[#f7a317] font-semibold text-xl pt-5 ">Connecting people with the same passion and eliminate the unnecessary struggles of traditional library</h4>
        </div>
        <div class="m-24 grid grid-cols-4 gap-2">
            <div class="col-span-2 min-h-32 bg-[#2a2a2b] hover:bg-[#181818] rounded-md border-2 border-[#f7a317] hover:border-[#ea6820]">
              <div class="mt-4 mx-4 grid grid-cols-4 gap-3 ">
                <img src="" alt="" class=" row-span-2 h-24 w-24  bg-white rounded-full">
                <div class=" text-2xl font-extrabold text-[#f7a317] col-start-2 col-span-3 h-8 ">Emily Garcia</div>
                <div class=" font-bold text-[#f7f7f7] text-xs col-start-2 col-span-3 h-12 w-full ">"The library has been a true lifesaver! The selection of books is incredible, and the staff is always so helpful in finding exactly what I'm looking for."</div>
              </div>
            </div> 
            <div class="p-3 col-span-2 row-span-2 bg-[#2a2a2b] hover:bg-[#181818] rounded-md border-2 border-[#f7a317] hover:border-[#ea6820]">
              <div class="mt-4 mx-4 grid grid-cols-4 gap-3 ">
                <img src="" alt="" class=" row-span-2 h-24 w-24  bg-white rounded-full">
                <div class=" text-2xl font-extrabold text-[#f7a317] col-start-2 col-span-3 h-8 ">Michael Brown</div>
                <div class=" font-bold text-[#f7f7f7] text-xs col-start-2 col-span-3 h-12 w-full">"The library has become a regular hangout for my kids and me. They love attending the children's programs and browsing the picture books."</div>
                <div class=" font-bold text-[#f7f7f7] text-xs col-span-4 row-span-2 h-28">"The library is such a valuable asset to our community. The staff is fantastic at creating a welcoming and engaging environment for children.  It's a place where they can learn and have fun at the same time! It provides a space for people of all ages to come together, learn, and explore. I love attending the author talks and story times they offer. It's a wonderful place to connect with others and discover new things. The staff is accommodating and helps ensure everything runs smoothly."</div>
              </div> 
            </div> 
            <div class="col-span-2 min-h-32 bg-[#2a2a2b] hover:bg-[#181818] rounded-md border-2 border-[#f7a317] hover:border-[#ea6820]">
              <div class="mt-4 mx-4 grid grid-cols-4 gap-3 ">
                <img src="" alt="" class=" row-span-2 h-24 w-24  bg-white rounded-full">
                <div class=" text-2xl font-extrabold text-[#f7a317] col-start-2 col-span-3 h-8 ">Anna Jackson</div>
                <div class=" font-bold text-[#f7f7f7] text-xs col-start-2 col-span-3 h-12 w-full">"The library's meeting rooms have been a valuable asset for my business. They offer a professional and affordable space to hold client meetings and training sessions."</div>
              </div>
            </div> 
            <div class="p-3 min-h-32 bg-[#2a2a2b] rounded-md border-2 border-[#f7a317] hover:border-[#ea6820]">
                <div class="mt-4 mx-4 grid grid-cols-2 gap-3">
                    <img src="" alt="" class="h-16 w-16 bg-white rounded-full">
                    <div class=" text-2xl font-extrabold text-[#f7a317] ">Alex Kim</div>
                    <div class=" font-bold text-[#f7f7f7] text-xs col-span-2 h-16">"The library's online resources have been invaluable for my research. They making it easy to find the information I need."</div>
                </div>
            </div> 
            <div class="col-span-3 h-48 bg-[#2a2a2b] rounded-md border-2 border-[#f7a317] hover:border-[#ea6820]">
              <div class="mt-4 mx-4 grid grid-cols-6 gap-3 ">
                <img src="" alt="" class=" row-span-2 h-24 w-24  bg-white rounded-full">
                <div class=" text-2xl font-extrabold text-[#f7a317] col-start-2 col-span-5 h-8 ">Maya Patel</div>
                <div class=" font-bold text-[#f7f7f7] text-xs col-start-2 col-span-5 h-28 w-full">"The library's digital inclusion programs have been a game-changer for me. They offer free computer classes and workshops, which helped me develop basic computer skills and navigate online resources more confidently. The librarians are also very knowledgeable and provide excellent research assistance. It's truly a one-stop shop for all my research needs! The library also provides access to public computers and high-speed Wi-Fi, making it a great place to catch up on emails or research on the go. It's a fantastic resource for anyone who wants to bridge the digital divide."</div>
              </div>
            </div> 
        </div>
        </section>

        <section class="p-8 w-full min-h-screen">  
            <div class="ml-10">
                <h3 class="text-[#f7f7f7] font-semibold text-6xl">Find <span class="text-[#f7a317]">Any Books</span> You are Looking For!</h3>
            </div>
            <div class="ml-10">
                <h4 class="text-[#f7f7f7] font-semibold text-xl pt-24 pl-14">Most Searched Book</h4>
                <div class="grid grid-cols-6 gap-5 h-[24rem] bg-[#2a2a2b] rounded-md hover:border-2 hover:border-[#f7a317] m-14 ">
                    <img src="images/cote.png" alt="" class="row-span-5 col-span-2 h-72 w-48 row-start-2 ml-12 rounded-md">
                    <div class="h-24 text-[#f7f7f7] text-5xl col-span-3 row-start-2 ">Classroom Of the Elite 2nd Year Vol.9</div>
                    <div class="h-30 text-[#f7f7f7] text-lg col-span-3 row-start-3 row-span-2 text-ellipsis overflow-hidden">Miyabi Nagumo monologues of his journey as a student. Being the best in academics and sports, many tried to take advantage of him. He wasn't that hard working but rather grasp things faster than others. Popularity was important to him but he couldn’t be rid of a discomfort that was augmented with Horikita Manabu, someone smarter, more impressive and determined than him. Next was Ayanokoji Kiyotaka, someone arrogant but had unquestionable abilities. He began doubting himself despite having similar accomplishments. The only way to quell this discomfort was to finally defeat someone of similar capabilities, proving he is in fact, the real deal.</div>
                </div> 
                <div class="grid grid-cols-6 gap-5 h-[24rem] bg-[#2a2a2b] rounded-md hover:border-2 hover:border-[#f7a317] m-14 ">
                    <img src="images/86.png" alt="" class="row-span-5 col-span-2 h-72 w-48 row-start-2 ml-12 rounded-md">
                    <div class="h-24 text-[#f7f7f7] text-5xl col-span-3 row-start-2 ">86 - Eighty Six - Vol.12</div>
                    <div class="h-32 text-[#f7f7f7] text-lg col-span-3 row-start-3 row-span-2 text-ellipsis overflow-hidden">The Republic's evacuation resulted in massive casualties on both sides, and the fallout takes a toll on everyone. As Shin muses on what it means to be a leader, Lena thinks of her homeland, now lost to her forever. Frederica, too, is dismayed by her own powerlessness as the ill-fated Empire's last Empress—she'll have to change if she wants to survive. Meanwhile, discontent is brewing within the Empire, and a few disaffected squadrons, desperate to reverse the state of the war, reach for a dangerous miracle.</div>
                </div> 
                <div class="grid grid-cols-6 gap-5 h-[24rem] bg-[#2a2a2b] rounded-md hover:border-2 hover:border-[#f7a317] m-14 ">
                    <img src="images/got.png" alt="" class="row-span-5 col-span-2 h-72 w-48 row-start-2 ml-12 rounded-md">
                    <div class="h-24 text-[#f7f7f7] text-5xl col-span-3 row-start-2 ">Game of Thrones Vol.1</div>
                    <div class="h-32 text-[#f7f7f7] text-lg col-span-3 row-start-3 row-span-2 text-ellipsis overflow-hidden">Long ago, in a time forgotten, a preternatural event threw the seasons out of balance. In a land where summers can last decades and winters a lifetime, trouble is brewing. The cold is returning, and in the frozen wastes to the north of Winterfell, sinister and supernatural forces are massing beyond the kingdom’s protective Wall. At the center of the conflict lie the Starks of Winterfell, a family as harsh and unyielding as the land they were born to. Sweeping from a land of brutal cold to a distant summertime kingdom of epicurean plenty, here is a tale of lords and ladies, soldiers and sorcerers, assassins and bastards, who come together in a time of grim omens.

Here an enigmatic band of warriors bear swords of no human metal; a tribe of fierce wildlings carry men off into madness; a cruel young dragon prince barters his sister to win back his throne; and a determined woman undertakes the most treacherous of journeys. Amid plots and counterplots, tragedy and betrayal, victory and terror, the fate of the Starks, their allies, and their enemies hangs perilously in the balance, as each endeavors to win that deadliest of conflicts: the game of thrones.</div>
                </div> 
            </div>
        </section>
@endsection
</x-app-layout>
