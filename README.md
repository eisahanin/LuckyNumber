<h1><strong>DAILY LUCKY NUMBER</strong></h1>

<h2>Overview</h2>
<p>A project where I tell you your lucky number. :)
For this project I wanted to learn mainly PHP and some JavaScript to create a silly little site, where I tell you your lucky number.
The main objective of this was to learn:</p>
<ul>
  <li>How to work with cookies and understand PHP</li>
  <li>Create a visually interesting graphics with a combination of CSS and JS.</li>
</ul>
<p><strong>If you only care about the final result, here are the videos.</a></strong></p>

DESKTOP:

https://github.com/eisahanin/LuckyNumber/assets/43936927/526c8eab-c3fa-4380-8750-af630b49adcd

https://github.com/eisahanin/LuckyNumber/assets/43936927/d7fef071-fbd6-43fa-a5dc-8e2bf6a7c3c6

https://github.com/eisahanin/LuckyNumber/assets/43936927/c5172a6c-0dc0-411b-87dc-247ed331da1e

https://github.com/eisahanin/LuckyNumber/assets/43936927/611d65d9-efd4-43f2-adc0-40df8e2eed09

https://github.com/eisahanin/LuckyNumber/assets/43936927/391a49a2-a770-464a-9d6a-db7abb2bcefc

MOBILE:

https://github.com/eisahanin/LuckyNumber/assets/43936927/7cf4458b-fc9c-45ad-91b9-2532ab89d961

https://github.com/eisahanin/LuckyNumber/assets/43936927/5baf443c-484b-4ae8-bc92-d2076c22bd33

https://github.com/eisahanin/LuckyNumber/assets/43936927/5e6a3ce3-de0f-45a2-ae0d-6d708ea806e5

https://github.com/eisahanin/LuckyNumber/assets/43936927/4a4184ee-ea2b-4743-8693-f7b83d90b102

https://github.com/eisahanin/LuckyNumber/assets/43936927/0f4b7da4-ea4c-47d3-84d1-b9d1d4fc6b71



<p>If you are interested about the process, read on!</p>

<h2>Development</h2>
<h3>Concept</h3>
<p>Because of the nature of this site, I wanted to make something that was light hearted. For this, I referenced the Fortune Teller Hamstarr from Rainbow Rescue respectively.</p>
<img src="https://static.wikia.nocookie.net/hamtaro/images/d/d6/Hamstarr.png/revision/latest?cb=20130607020049" />
<p>Another reference is the Personality Quiz from the Pokemon Mystery Dungeon Games, specifically <a href="https://www.youtube.com/embed/jyWq6gY7SZk?si=1Mc9TUpN0z7wH7Q4">the visualiser.</a></p>
<p>I will also use Comic Sans, because it is a silly project.</p>

<h3>Project Set-Up</h3>
<h4>Coding</h4>

<p>Because I know I wanted to use PHP for this project, I must have php index files. I also created a lucky php file that will execute the LuckyGen() function, which generates a number, sets that number as a cookie and then prints the number. Then after that, there will be a code on the index page if the user returns to it, which prints out the number again, and lets the user create a new number by deleting the cookie and reseting the index page. This creates a nice closed loop.</p>

![luckyloop](https://github.com/eisahanin/LuckyNumber/assets/43936927/2edf59ea-6f58-4479-a052-7ca819fe3204)


![index php](https://github.com/eisahanin/LuckyNumber/assets/43936927/0ae5796a-9ea1-4606-b0ea-309a51859036)


<p>The coding is fairly simple but because we are going into other pages, this requires the functions and the variables to be included through a separate PHP file.</p>


![php functions](https://github.com/eisahanin/LuckyNumber/assets/43936927/e8a0aee9-8233-442d-ac58-2955f71ddbb7)

<p>And with that, that page is backend of this has been created.</p>

<h4>A E S T H E T I C S</h4>
<p>For this project, I looked at Juxtoppossed's video about <a href="https://www.youtube.com/watch?v=_ZFghigBmqo">implementing grainy textures into a website.</a> I used the same website but additionally, I also used the Ffflux SVG generator to create some dreamy gradient textures.</p>

![flux img](https://github.com/eisahanin/LuckyNumber/assets/43936927/f364d770-c2dc-4acf-968b-ad49931d6964)

<p>I wanted to create a repeating pattern myself so I opened up After Affects, created a gradient and added a Warping Filter as well as making sure it looped perfectly and compressed the framerate and resolution for size and aesthetic purposes.</p>

![bg](https://github.com/eisahanin/LuckyNumber/assets/43936927/50c76285-369a-44c2-9924-a02b4d9e065b)

<p>With that mind, I overlayed them all in the background, creating this nice dark dreamy effect.</p>

https://github.com/eisahanin/LuckyNumber/assets/43936927/526c8eab-c3fa-4380-8750-af630b49adcd

<p>Because I decided specifically to use PHP for the backend, HTML, CSS, and JavaScript will be used for the front-end. For the section where the website allows the user to create a new number, I wanted to make the section appear on scroll. Basic JavaScript in the grand scheme, but getting the trouble for me was animating it awake and making sure that the scroll worked on mobile as well. And to complete the vision, I added scribbles of the fortune teller to add some personality.</p>

https://github.com/eisahanin/LuckyNumber/assets/43936927/611d65d9-efd4-43f2-adc0-40df8e2eed09

<h2>Final Result</h2>
<p>After combining everything together, the page resulted in looking like so shown.</p>

<p>While not exactly what I wanted, I think getting this project right and functional is what matters. What started as an ambitious project turned into a small but delightful website.</p>
<p>What I learned:</p>
<ul>
  <li>Figuring out what programming Languages would be better was especially difficult. Because I insisted that I want to use PHP and JS for this project (which honestly could have just used HTML/CSS/JS), the way I structured the project is fundamentally different.</li>
  <li>I recognised immediately how some of the ideas that I have were complex, and so I opted for something I had a better understanding of. Because I have a more game-dev background, I also recognised I could have used other Development Kits or engines for this purpose. Translating an App/Game-like idea into a more of website idea was something I have not thought of and getting this experience was great for me.</li>
  <li>Well, I definitely understand PHP more than what I did before but also I know a lot more of what I do not know.</li>
</ul>
