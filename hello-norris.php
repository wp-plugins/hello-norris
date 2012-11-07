<?php
/*
	Plugin Name: Hello Norris
	Plugin URI: 
	Description: Shows a random fact about Chuck Norris in the upper right of admin pages.
	Version: 1.0
	Author: Jens Nilsson
	Author URI: http://jensnilsson.nu
	License: Ask Chuck Norris
*/

$chuck = new Hello_Chuck_Norris();

class Hello_Chuck_Norris {
	private $facts = "
When the Boogeyman goes to sleep every night, he checks his closet for Chuck Norris.
Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.
There is no theory of evolution. Just a list of creatures Chuck Norris has allowed to live.
Outer space exists because it’s afraid to be on the same planet with Chuck Norris.
Chuck Norris does not sleep. He waits.
Chuck Norris is currently suing NBC, claiming Law and Order are trademarked names for his left and right legs.
Chuck Norris is the reason why Waldo is hiding.
Chuck Norris counted to infinity – twice.
There is no chin behind Chuck Norris’ beard. There is only another fist.
When Chuck Norris does a pushup, he isn’t lifting himself up, he’s pushing the Earth down.
Chuck Norris is so fast, he can run around the world and punch himself in the back of the head.
Chuck Norris’ hand is the only hand that can beat a Royal Flush.
Chuck Norris can lead a horse to water AND make it drink.
Chuck Norris doesn’t wear a watch, HE decides what time it is.
Chuck Norris can slam a revolving door.
Chuck Norris does not get frostbite. Chuck Norris bites frost
Remember the Soviet Union? They decided to quit after watching a DeltaForce marathon on Satellite TV.
Contrary to popular belief, America is not a democracy, it is a Chucktatorship
If you have five dollars and Chuck Norris has five dollars, Chuck Norris has more money than you.
There is no ‘ctrl’ button on Chuck Norris’s computer. Chuck Norris is always in control.
Apple pays Chuck Norris 99 cents every time he listens to a song.
Chuck Norris can sneeze with his eyes open.
Chuck Norris can eat just one Lay’s potato chip.
Chuck Norris is suing Myspace for taking the name of what he calls everything around you.
Chuck Norris destroyed the periodic table, because he only recognizes the element of surprise.
Chuck Norris can kill two stones with one bird.
When Chuck Norris calls 1-900 numbers, he doesnt get charged. He holds up the phone and money falls out.
Chuck Norris once ate a whole cake before his friends could tell him there was a stripper in it.
Some people like to eat frogs’ legs. Chuck Norris likes to eat lizard legs. Hence, snakes.
There are no races, only countries of people Chuck Norris has beaten to different shades of black and blue.
A Chuck Norris-delivered Roundhouse Kick is the preferred method of execution in 16 states.
When Chuck Norris falls in water, Chuck Norris doesn’t get wet. Water gets Chuck Norris.
Scientists have estimated that the energy given off during the Big Bang is roughly equal to 1CNRhK (Chuck Norris Roundhouse Kick)
Chuck Norris’ house has no doors, only walls that he walks through.
How much wood would a woodchuck chuck if a woodchuck could Chuck Norris? …All of it.
Chuck Norris doesn’t actually write books, the words assemble themselves out of fear.
In honor of Chuck Norris, all McDonald’s in Texas have an even larger size than the super-size. When ordering, just ask to be Chucksized.
Chuck Norris CAN believe it’s not butter.
If tapped, a Chuck Norris roundhouse kick could power the country of Australia for 44 minutes.
Chuck Norris can divide by zero.
A picture is worth a thousand words. A Chuck Norris is worth 1 billion words.
Chuck Norris invented his own type of karate. It’s called Chuck-Will-Kill.
When an episode of Walker Texas Ranger was aired in France, the French surrendered to Chuck Norris just to be on the safe side.
While urinating, Chuck Norris is easily capable of welding titanium.
When Chuck Norris talks, everybody listens. And dies.
When Steven Seagal kills a ninja, he only takes its hide. When Chuck Norris kills a ninja, he uses every part.
Contrary to popular belief, there is indeed enough Chuck Norris to go around.
Chuck Norris doesnt shave; he kicks himself in the face. The only thing that can cut Chuck Norris is Chuck Norris.
For some, the left testicle is larger than the right one. For Chuck Norris, each testicle is larger than the other one.
Chuck Norris always knows the EXACT location of Carmen SanDiego.
When taking the SAT, write “Chuck Norris” for every answer. You will score over 8000.
Chuck Norris invented black. In fact, he invented the entire spectrum of visible light. Except pink. Tom Cruise invented pink.
When you’re Chuck Norris, anything + anything is equal to 1. One roundhouse kick to the face.
On his birthday, Chuck Norris randomly selects one lucky child to be thrown into the sun.
Nobody doesn’t like Sara Lee. Except Chuck Norris.
Chuck Norris doesn’t throw up if he drinks too much. Chuck Norris throws down!
Chuck Norris has 12 moons. One of those moons is the Earth.
Chuck Norris grinds his coffee with his teeth and boils the water with his own rage.
Chuck Norris ordered a Big Mac at Burger King, and got one.
Chuck Norris and Mr. T walked into a bar. The bar was instantly destroyed, as that level of awesome cannot be contained in one building.
If you Google search “Chuck Norris getting his ass kicked” you will generate zero results. It just doesn’t happen.
Chuck Norris can drink an entire gallon of milk in thirty-seven seconds.
Little known medical fact: Chuck Norris invented the Caesarean section when he roundhouse-kicked his way out of his monther’s womb.
Chuck Norris doesn’t bowl strikes, he just knocks down one pin and the other nine faint.
It takes Chuck Norris 20 minutes to watch 60 Minutes.
Chuck Norris has a deep and abiding respect for human life… unless it gets in his way.
The Bermuda Triangle used to be the Bermuda Square, until Chuck Norris Roundhouse kicked one of the corners off.
There are no weapons of mass destruction in Iraq, Chuck Norris lives in Oklahoma.
Chuck Norris doesn’t believe in Germany.
When Chuck Norris is in a crowded area, he doesn’t walk around people. He walks through them.
Chuck Norris once ate an entire bottle of sleeping pills. They made him blink.
Chuck Norris can touch MC Hammer.
Chuck Norris played Russian Roulette with a fully loaded gun and won.
It takes 14 puppeteers to make Chuck Norris smile, but only 2 to make him destroy an orphanage.
Some people wear Superman pajamas. Superman wears Chuck Norris pajamas.
Simply by pulling on both ends, Chuck Norris can stretch diamonds back into coal.
When Chuck Norris does a pushup, he isn’t lifting himself up, he’s pushing the Earth down.
Chuck Norris invented the bolt-action rifle, liquor, sexual intercourse, and football– in that order.
A high tide means Chuck Norris is flying over your coast. The tide is caused by God pissing his pants.
Chuck Norris keeps his friends close and his enemies closer. Close enough to drop them with one round house kick to the face.
There is in fact an “I” in Norris, but there is no “team”… not even close.
Chuck Norris doesn’t stub his toes. He accidentally destroys chairs, bedframes, and sidewalks.
Chuck Norris roundhouse kicks don’t really kill people. They wipe out their entire existence from the space-time continuum.
Chuck Norris does not own a stove, oven, or microwave , because revenge is a dish best served cold.
Tom Clancy has to pay royalties to Chuck Norris because “The Sum of All Fears” is the name of Chuck Norris’ autobiography.
Chuck Norris can slam a revolving door.
Chuck Norris built a better mousetrap, but the world was too frightened to beat a path to his door.
Hellen Keller’s favorite color is Chuck Norris.
If, by some incredible space-time paradox, Chuck Norris would ever fight himself, he’d win. Period.
Chuck Norris is currently suing myspace for taking the name of what he calls everything around you.
Science Fact: Roundhouse kicks are comprised primarily of an element called Chucktanium.
Chuck Norris proved that we are alone in the universe. We weren’t before his first space expedition.
Superman once watched an episode of Walker, Texas Ranger. He then cried himself to sleep.
Chuck Norris doesn’t step on toes. Chuck Norris steps on necks.
Movie trivia: The movie “Invasion U.S.A.” is, in fact, a documentary.
Chuck Norris does not “style” his hair. It lays perfectly in place out of sheer terror.
There is no such thing as global warming. Chuck Norris was cold, so he turned the sun up.
A study showed the leading causes of death in the United States are: 1. Heart disease, 2. Chuck Norris, 3. Cancer
Chuck Norris did in fact, build Rome in a day.
Along with his black belt, Chuck Norris often chooses to wear brown shoes. No one has DARED call him on it. Ever.
Once you go Norris, you are physically unable to go back.
Ninjas want to grow up to be just like Chuck Norris. But usually they grow up just to be killed by Chuck Norris.
Chuck Norris once sued Burger King after they refused to put razor wire in his Whopper Jr, insisting that that actually is “his” way.
The last thing you hear before Chuck Norris gives you a roundhouse kick? No one knows because dead men tell no tales.
Chuck Norris doesn’t play god. Playing is for children.
Chuck Norris is the only person in the world that can actually email a roundhouse kick.
Chuck Norris won super bowls VII and VIII singlehandedly before unexpectedly retiring to pursue a career in ass-kicking.
Wo hu cang long. The translation from Mandarin Chinese reads: “Crouching Chuck, Hidden Norris”
Chuck Norris can set ants on fire with a magnifying glass. At night.
Some kids play Kick the can. Chuck Norris played Kick the keg.
‘Icy-Hot’ is too weak for Chuck Norris. After a workout, Chuck Norris rubs his muscles down with liquid-hot MAGMA.
Chuck Norris cannot love, he can only not kill.
When Chuck Norris was a baby, he didn’t suck his mother’s breast. His mother served him whiskey, straight out of the bottle.
According to Einstein’s theory of relativity, Chuck Norris can actually roundhouse kick you yesterday.
Chuck Norris once pulled out a single hair from his beard and skewered three men through the heart with it.
Chuck Norris’ favourite cut of meat is the roundhouse.
Chuck Norris recently had the idea to sell his urine as a canned beverage. We know this beverage as Red Bull.
If at first you don’t succeed, you’re not Chuck Norris.
If Chuck Norris were a calendar, every month would be named Chucktober, and every day he’d kick your ass.
Chuck Norris’s show is called Walker: Texas Ranger, because Chuck Norris doesn’t run.
MacGyver can build an airplane out of gum and paper clips, but Chuck Norris can roundhouse-kick his head through a wall and take it.
Behind every successful man, there is a woman. Behind every dead man, there is Chuck Norris.
Chuck Norris brushes his teeth with a mixture of iron shavings, industrial paint remover, and wood-grain alcohol.
The easiest way to determine Chuck Norris’ age is to cut him in half and count the rings.
There is endless debate about the existence of the human soul. Well it does exist, and Chuck Norris finds it delicious.
Most boots are made for walkin’. Chuck Norris’ boots ain’t that merciful.
Chuck Norris wears a live rattlesnake as a condom.
The Bible was originally titled “Chuck Norris and Friends”
Chuck Norris began selling the Total Gym as an ill-fated attempt to make his day-to-day opponents less laughably pathetic.
Do you know why Baskin Robbins only has 31 flavors? Because Chuck Norris doesn’t like Fudge Ripple.
When Chuck Norris says “More cowbell”, he MEANS it.
Chuck Norris was what Willis was talkin’ about.
Google won’t search for Chuck Norris because it knows you don’t find Chuck Norris, he finds you.
Chuck Norris can lead a horse to water AND make it drink.
Nagasaki never had a bomb dropped on it. Chuck Norris jumped out of a plane and punched the ground.
Chuck Norris destroyed the periodic table, because Chuck Norris only recognizes the element of surprise.
It is believed dinosaurs are extinct due to a giant meteor. That’s true if you want to call Chuck Norris a giant meteor.
Chuck Norris shot the sheriff, but he round house kicked the deputy.
That’s not Chuck Norris doing push-ups — that’s Chuck Norris moving the Earth away from the path of a deadly asteroid.
Chuck Norris can judge a book by its cover.
Nothing can escape the gravity of a black hole, except for Chuck Norris. Chuck Norris eats black holes. They taste like chicken.
Chuck Norris does not play the lottery. It doesn’t have nearly enough balls.
Q: How many Chuck Norris’ does it take to change a light bulb? A: None, Chuck Norris prefers to kill in the dark.
As President Roosevelt said: “We have nothing to fear but fear itself. And Chuck Norris.”
Chuck Norris just says “no” to drugs. If he said “yes”, it would collapse Colombia’s infrastructure.
Since 1940, the year Chuck Norris was born, roundhouse-kick related deaths have increased 13,000 percent.
Crime does not pay – unless you are an undertaker following Walker, Texas Ranger, on a routine patrol.
Chuck Norris does not own a house. He walks into random houses and people move.
It is better to give than to receive. This is especially true of a Chuck Norris roundhouse kick.
Chuck Norris is the only person to ever win a staring contest against Ray Charles and Stevie Wonder at the same time.
Industrial logging isn’t the cause of deforestation. Chuck Norris needs toothpicks.
Chuck Norris smells what the Rock is cooking… because the Rock is Chuck Norris’ personal chef.
Chuck Norris is the reason why Waldo is hiding.
“Brokeback Mountain” is not just a movie. It’s also what Chuck Norris calls the pile of dead ninjas in his front yard.
Chuck Norris does not eat. Food understands that the only safe haven from Chuck Norris’ fists is inside his own body.
Chuck Norris doesn’t read books. He stares them down until he gets the information he wants.
Chuck Norris uses a night light. Not because Chuck Norris is afraid of the dark, but the dark is afraid of Chuck Norris.
Chuck Norris is not capable of hitting a target on the broad side of a barn. Every time he tries, the whole damn barn falls down.
When Bruce Banner gets mad, he turns into the Hulk. When the Hulk gets mad, he turns into Chuck Norris.
Chuck Norris once kicked a horse in the chin. Its decendants are known today as Giraffes.
Sticks and stones may break your bones, but a Chuck Norris glare will liquefy your kidneys.
Chuck Norris once went skydiving, but promised never to do it again. One Grand Canyon is enough
Chuck Norris’s version of a “chocolate milkshake” is a raw porterhouse wrapped around ten Hershey bars, and doused in diesel fuel.
In a fight between Batman and Darth Vader, the winner would be Chuck Norris.
Chuck Norris puts his pants on one leg at a time, just like the rest of us. The only difference is, then he kills people.
Everybody loves Raymond. Except Chuck Norris.
Chuck Norris got his drivers license at the age of 16. Seconds.
Chuck Norris can win at solitaire with only 18 cards.
Chuck Norris once shat blood – the blood of 11,940 natives he had killed and eaten.
Maslow’s theory of higher needs does not apply to Chuck Norris. He only has two needs: killing people and finding people to kill.
The truth will set you free. Unless Chuck Norris has you, in which case, forget it buddy!
For most people, home is where the heart is. For Chuck Norris, home is where he stores his collection of human skulls.
Kryptonite has been found to contain trace elements of Chuck Norris roundhouse kicks to the face. This is why it is so deadly to Superman.
Coroners refer to dead people as “ABC’s”. Already Been Chucked.
Chuck Norris doesn’t look both ways before he crosses the street… he just roundhouses any cars that get too close.
Chuck Norris does not have to answer the phone. His beard picks up the incoming electrical impulses and translates them into audible sound.
How many roundhouse kicks does it take to get to the center of a tootsie pop? Just one. From Chuck Norris.
Chuck Norris doesnt wear a watch, HE decides what time it is.
When chuck Norris does division, there are no remainders.
If you rearrange the letters in “Chuck Norris”, they also spell “Crush Rock In”. The words “with his fists” are understood.
Never look a gift Chuck Norris in the mouth, because he will bite your damn eyes off.
The original title for Star Wars was “Skywalker: Texas Ranger”. Starring Chuck Norris.
Guantuanamo Bay, Cuba, is the military code-word for “Chuck Norris’ basement”.
The phrase ‘balls to the wall’ was originally conceived to describe Chuck Norris entering any building smaller than an aircraft hangar.
Chuck Norris’ roundhouse kick is so powerful, it can be seen from outer space by the naked eye.
Ozzy Osbourne bites the heads off of bats. Chuck Norris bites the heads off of Siberian Tigers.
He who lives by the sword, dies by the sword. He who lives by Chuck Norris, dies by the roundhouse kick.
The best-laid plans of mice and men often go awry. Even the worst-laid plans of Chuck Norris come off without a hitch.
The phrase ‘dead ringer’ refers to someone who sits behind Chuck Norris in a movie theater and forgets to turn their cell phone off.
Chuck Norris’ Roundhouse kick is so powerful, that on the set of Sidekicks he single-footedly destroyed Jonathan Brandis’ Career.
Chuck Norris can taste lies.
One time, Chuck Norris accidentally stubbed his toe. It destroyed the entire state of Ohio.
Little Miss Muffet sat on her tuffet, until Chuck Norris roundhouse kicked her into a glacier.
Chuck Norris can blow bubbles with beef jerky.
Chuck Norris does, in fact, live in a round house.
Chuck Norris can skeletize a cow in two minutes.
The only sure things are Death and Taxes…and when Chuck Norris goes to work for the IRS, they’ll be the same thing.
Chuck Norris’ first job was as a paperboy. There were no survivors.
With the rising cost of gasoline, Chuck Norris is beginning to worry about his drinking habit.
The square root of Chuck Norris is pain. Do not try to square Chuck Norris, the result is death.
chuck Norris’ testicles do not produce sperm. They produce tiny white ninjas that recognize only one mission: seek and destroy.
To be or not to be? That is the question. The answer? Chuck Norris.
Chuck Norris has never been in a fight, ever. Do you call one roundhouse kick to the face a fight?
There are two types of people in the world… people that suck, and Chuck Norris.
Chuck Norris never wet his bed as a child. The bed wet itself out of fear.
70% of a human’s weight is water. 70% of Chuck Norris’ weight is his dick.
Jean-Claude Van Damme once kicked Chuck Norris’ ass. He was then awakened from his dream by a roundhouse kick to the face.
Chuck Norris uses 8′x10′ sheets of plywood as toilet paper.
Noah was the only man notified before Chuck Norris relieved himself in the Atlantic Ocean.
Chuck Norris eats steak for every single meal. Most times he forgets to kill the cow.
The First Law of Thermodynamics states that energy can neither be created nor destroyed… unless it meets Chuck Norris.
Chuck Norris doesn’t go on the internet, he has every internet site stored in his memory. He refreshes webpages by blinking.
Chuck Norris knows everything there is to know – Except for the definition of mercy.
Chuck Norris never has to wax his skis because they’re always slick with blood.
When you say “no one’s perfect”, Chuck Norris takes this as a personal insult.
182,000 Americans die from Chuck Norris-related accidents every year.
Paper beats rock, rock beats scissors, and scissors beats paper, but Chuck Norris beats all 3 at the same time.
All roads lead to Chuck Norris. And by the transitive property, a roundhouse kick to the face.
July 4th is Independence day. And the day Chuck Norris was born. Coincidence? i think not.
Chuck Norris never goes to the dentist because his teeth are unbreakable. His enemies never go to the dentist because they have no teeth.
In the medical community, death is referred to as “Chuck Norris Disease”
Chuck Norris was once in a knife fight, and the knife lost.
If you work in an office with Chuck Norris, don’t ask him for his three-hole-punch.
The First rule of Chuck Norris is: you do not talk about Chuck Norris.
When Chuck Norris plays Monopoly, it affects the actual world economy.
Chuck Norris drinks napalm to quell his heartburn.
As an infant, Chuck Norris’ parents gave him a toy hammer. He gave the world Stonehenge.
Chuck Norris once ordered a steak in a restaurant. The steak did what it was told.
Most people fear the Reaper. Chuck Norris considers him “a promising Rookie”.
There are only two things that can cut diamonds: other diamonds, and Chuck Norris.
President Roosevelt once rode his horse 100 miles. Chuck Norris carried his the same distance in half the time.
Chuck Norris once ate four 30lb bowling balls without chewing.
Chuck Norris qualified with a top speed of 324 mph at the Daytona 500, without a car.
Chuck Norris likes his coffee half and half: half coffee grounds, half wood-grain alcohol.
Chuck Norris uses tabasco sauce instead of visine.
The chemical formula for the highly toxic cyanide ion is CN-. These are also Chuck Norris’ initials. This is not a coincidence.
Chuck Norris’ credit cards have no limit. Last weekend, he maxed them out.
A man once claimed Chuck Norris kicked his ass twice, but it was promptly dismissed as false – no one could survive it the first time.
Chuck Norris sleeps with a pillow under his gun.
Chuck Norris doesn’t chew gum. Chuck Norris chews tin foil.
Aliens DO indeed exist. They just know better than to visit a planet that Chuck Norris is on.
When in a bar, you can order a drink called a “Chuck Norris”. It is also known as a “Bloody Mary”, if your name happens to be Mary.
Every time Chuck Norris smiles, someone dies. Unless he smiles while he’s roundhouse kicking someone in the face. Then two people die.
Some people ask for a Kleenex when they sneeze, Chuck Norris asks for a body bag.
There’s an order to the universe: space, time, Chuck Norris…. Just kidding, Chuck Norris is first.
A man once asked Chuck Norris if his real name is “Charles”. Chuck Norris did not respond, he simply stared at him until he exploded.
In a tagteam match, Chuck Norris was teamed with Hulk Hogan against King Kong Bundy and Andre The Giant. He pinned all 3 at the same time.
Chuck Norris doesn’t see dead people. He makes people dead.
For undercover police work, Chuck Norris pins his badge underneath his shirt, directly into his chest.
In the X-Men movies, none of the X-Men super-powers are done with special effects. Chuck Norris is the stuntman for every character.
Chuck Norris is a vegetarian. Meaning, he does not eat animals until first he puts them into vegetative state with his fists.
The 11th commandment is “Thou shalt not piss off Chuck Norris” This commandment is rarely enforced, as it is impossible to accomplish.
Chuck Norris is his own line at the DMV.
Two wrongs don’t make a right. Unless you’re Chuck Norris. Then two wrongs make a roundhouse kick to the face.
Who let the dogs out? Chuck Norris let the dogs out… and then roundhouse kicked them through an Oldsmobile.
When Chuck Norris goes to out to eat, he orders a whole chicken, but he only eats its soul.
Chuck Norris has never won an Academy Award for acting… because he’s not acting.
If Chuck Norris wants your opinion, he’ll beat it into you.
Not everyone that Chuck Norris is mad at gets killed. Some get away. They are called astronauts.
Godzilla is a Japanese rendition of Chuck Norris’ first visit to Tokyo.
They once made a Chuck Norris toilet paper, but there was a problem– It wouldn’t take poop from anybody.
Chuck Norris once rode a nine foot grizzly bear through an automatic car wash, instead of taking a shower.
“Sweating bullets” is literally what happens when Chuck Norris gets too hot.
Chuck Norris’ sperm can be seen with the naked eye. Each one is the size of a quarter.
Chuck Norris doesn’t daydream. He’s too busy giving other people nightmares.
When Arnold says the line “I’ll be back” in the first Terminator movie it is implied that is he going to ask Chuck Norris for help.
There are no such things as tornados. Chuck Norris just hates trailer parks.
Chuck Norris does not follow fashion trends, they follow him. But then he turns around and kicks their ass. Nobody follows Chuck Norris.
Chuck Norris’ roundhouse kick is so powerful, it can be seen from outer space by the naked eye.
Chuck Norris once participated in the running of the bulls. He walked.
The Drummer for Def Leppard’s only got one arm. Chuck Norris needed a back scratcher.
Chuck Norris was the orginal sculptor of Mount Rushmore. He completed the entire project using only a bottle opener and a drywall trowel.
Chuck Norris once rode a bull, and nine months later it had a calf.
Chuck Norris once lost the remote, but maintained control of the TV by yelling at it in between bites of his “Filet of Child” sandwich.
For Spring Break ’05, Chuck Norris drove to Madagascar, riding a chariot pulled by two electric eels.
Chuck Norris has banned rainbows from the state of North Dakota.
Divide Chuck Norris by zero and you will in fact get one……..one bad-ass that is.
TNT was originally developed by Chuck Norris to cure indigestion.
After returning from World War 2 unscathed, Bob Dole was congratulated by Chuck Norris with a handshake. The rest is history.
Chuck Norris runs on batteries. Specifically, Die Hards.
“Let the Bodies Hit the Floor” was originally written as Chuck Norris’ theme song.
Chuck Norris will never have a heart attack. His heart isn’t nearly foolish enough to attack him.
Only Chuck Norris can prevent forest fires.
When Chuck Norris makes a burrito, its main ingredient is real toes.
Chuck Norris is not Irish. His hair is soaked in the blood of his victims.
They say curiosity killed the cat. This is false. Chuck Norris killed the cat. Every single one of them.
There is no such thing as a lesbian, just a woman who has never met Chuck Norris.
Chuck Norris crossed the road. No one has ever dared question his motives.
One time, at band camp, Chuck Norris ate a percussionist.
Chuck Norris doesn’t say “who’s your daddy”, because he knows the answer.
Chuck Norris originally wrote the first dictionary. The definition for each word is as follows – A swift roundhouse kick to the face.
Love does not hurt. Chuck Norris does.
Chuck Norris once round-house kicked a salesman. Over the phone.
The pen is mighter than the sword, but only if the pen is held by Chuck Norris.
Chuck Norris doesn’t kill two birds with one stone. Chuck Norris kills all birds, with two stones. The ones in his pants.
Chuck Norris knows the last digit of pi.
The air around Chuck Norris is always a balmy 78 degrees.
When Chuck Norris wants an egg, he cracks open a chicken.
Chuck Norris plays racquetball with a waffle iron and a bowling ball.
Chuck Norris doesn’t believe in ravioli. He stuffs a live turtle with beef and smothers it in pig’s blood.
Count from one to ten. That’s how long it would take Chuck Norris to kill you…Fourty seven times.
Chuck Norris is not Politically Correct. He is just Correct. Always.
Mr. T pities the fool. Chuck Norris rips the fool’s head off.
Chuck Norris had to stop washing his clothes in the ocean. The tsunamis were killing people.
Chuck Norris has volunteered to remain on earth after the Rapture; he will spend his time fighting the Anti-Christ.
Chuck Norris’ favorite cereal is Kellogg’s Nails ‘N’ Gravel.
In the first Jurassic Park movie, the Tyrannosaurus Rex wasn’t chasing the jeep. Chuck Norris was chasing the Tyrannosaurus AND the jeep.
Chuck Norris has never been accused of murder for the simple fact that his roundhouse kicks are recognized world-wide as “acts of God.”
“Brokeback Mountain” is not just a movie. It’s also what Chuck Norris calls the pile of dead ninjas in his front yard.
Rules of fighting: 1) Don’t bring a knife to a gun fight. 2) Don’t bring a gun to a Chuck Norris fight.
Chuck Norris is the only man who has, literally, beaten the odds. With his fists.
Chuck Norris wipes his ass with chain mail and sandpaper.
Chuck Norris describes human beings as “a sociable holder for blood and guts”.
Chuck Norris likes his ice like he likes his skulls: crushed.
Chuck Norris can kick through all 6 degrees of separation, hitting anyone, anywhere, in the face, at any time.
Most tough men eat nails for breakfast. chuck Norris does all of his grocery shopping at Home Depot.
Chuck Norris did not “lose” his virginity, he stalked it and then destroyed it with extreme prejudice.
Everything King Midas touches turnes to gold. Everything Chuck Norris touches turns up dead.
Chuck Norris’ pulse is measured on the richter scale.
Chuck Norris once roundhouse-kicked a ten dollar bill into 200 nickels.
Chuck Norris CAN in fact ‘raise the roof’. And he can do it with one hand.
Kenny G is allowed to live because Chuck Norris doesn’t kill women.
For Chuck Norris, every street is “one way”. HIS WAY.
There are now five cup sizes at Starbucks: Short, Tall, Grande, Venti, and Chuck Norris.
During the Vietnam War, Chuck Norris allowed himself to be captured. For torture, they made him eat his own entrails. He asked for seconds.
Chuck Norris once created a flamethrower by urinating into a lighter.
Instead of having a cigarette after sex, Chuck Norris heads outside and brands his cattle.
Chuck Norris actually built the stairway to heaven.
Whoever said “only the good die young” was probably in Chuck Norris’s kindergarten class.
Chuck Norris once skewered a man with the Eiffel tower.
The best part of waking up, is not Folgers in your cup, but knowing that Chuck Norris didn’t kill you in your sleep.
Chuck Norris doesn’t own a can opener, he just chews through the can.
Chuck Norris needs a monkeywrench and a blowtorch to masturbate.
Chuck Norris invented all 32 letters of the alphabet.
Remember The Ultimate Warrior? He quit wrestling because Chuck Norris wanted his nickname back.
Chuck Norris actually owns IBM. It was an extremely hostile takeover.
He, who laughs last, laughs best. He who laughs at Chuck Norris … dies.
Chuck Norris is like a dog, not only because he can smell fear, but because he can piss on whatever he wants.
Chuck Norris can jump-start a car using jumper cables attached to his nipples.
Chuck Norris doesn’t have blood. He is filled with magma.
Chuck Norris uses Tabasco Sauce for eye drops.
Chuck Norris can get Blackjack with just one card.
People created the automobile to escape from Chuck Norris…Not to be outdone, Chuck Norris created the automobile accident.
Chuck Norris roundhouse kicks people in the face first and asks questions later.
When Chuck Norris was born, the only person who cried was the doctor. Never slap Chuck Norris.
Chuck Norris can sneeze with his eyes open.
Chuck Norris got a perfect score on his SAT’s, simply by writing Chuck Norris for every answer.
Chuck Norris has to use a stunt double when he does crying scenes.
Chuck Norris successfully seperated twins conjoined at the head by roundkicking them in the face.
Dinosaurs went extinct because of the Chuck Norrisaurus.
People have often asked the United States, What is your secret weapon against terrorists? We simply reply…Chuck Norris
Chuck Norris wears Orion’s Belt around his pinky toe and he eats with the Big Dipper.
Chuck Norris eats lightning and farts thunder.
Lightning never strikes twice in one place because Chuck Norris is looking for it.
Chuck Norris was once a knight in King Arthur’s court. He was known as Sir Beatdown.
Chuck Norris once played rugby by himself. He went undefeated. Chuck Norris once played rugby by himself. He went undefeated.
In Desert Storm the reason why the Iraqi army surrendered so quickly because they knew Chuck Norris was coming.
Chuck Norris has never looked a baby in the eyes cause it might him cry but if he does it also makes him want to punch a baby.
Chuck norris doesnt go at the speed of light, he goes at the speed of Norris
Chuck Norris does not know about this website. If he did he would have just deleted the internet.
Chuck Norris’s sweat has burned holes in concrete.
The wind of Chuck Norris’s round house kick can be felt from 1600 million miles away
Chuck Norris has held the World Championship in every weight class at the same time.
There is no Control button on Chuck Norris’ computer. Chuck Norris is always in control.
Chuck Norris is so bad he makes viruses sick. As such, Chuck Norris is also responsible for the eradication of smallpox.
There are four legal methods of execution in the United States: lethal injection, gas chamber, electric chair and Chuck Norris.
Earth’s emergency defence plan in case of alien invasion is Chuck Norris.
Chuck Norris stared evil in the face, and it backed down
Chuck Norris can split the atom. With his bare hands.
On the SAT if you put Chuck Norris for every answer you will score over 8000
The United States could save billions in defense funding if they trade the Military for Chuck Norris
When Chuck Norris spits out watermelon seeds, he puts a machine gun to shame
Chuck Norris doesnt use after shave, he uses liquid hot magma.
You can lead a horse to water but cannot make him drink, unless you’re Chuck Norris
No matter what your mother always said, Chuck Norris can tune a fish.
Chuck Norris is ” The best a man can get ”
Scientists believe the world began with the “Big Bang”. Chuck Norris shrugs it off as a “bad case of gas”.
Chuck Norris let the dogs out.
Chuck Norris visits an active volcano every morning to get some of “the best damn espresso on Earth”.
Chuck Norris eats eight meals a day. Seven are steak, and the last is the rest of the cow.
Chuck Norris does know what Willis is talking about!
Chuck Norris don’t open no can of whoopass. He makes his own.
Chuck Norris could shoot someone and still have time to roundhouse kick him in the face before the bullet hit.
Chuck Norris’s body temperature is 98.6 degrees… Celsius.
The world’s fastest car has 7 gears. 5, 6, and Chuck Norris.
The active ingredient in Red Bull is Chuck Norris’s sweat.
When Chuck Norris goes to Vegas, he doesn’t have to gamble. The casinos just give him stacks of money.
In an emergency, Chuck Norris can be used as a floatation device.
When Chuck Norris is ready to wake up, he tells the sun to get the above the horizon.
The speed of light was instituted because Chuck Norris didn’t want get winded outrunning it. Chuck Norris hates to sweat.
Chuck Norris once bench-pressed the entire state of Ohio, and all of its residents.
Chuck Norris can hold his breathe for nine years.
When somebody yells “Last one in is a rotten egg,” Chuck Norris is never the rotten egg.
Chuck Norris invented the question mark.
Chuck Norris trick-or-treated as himself as a child.
Chuck Norris has 3 knees on each leg.
Chuck Norris can cook minute rice in 30 seconds.
If you gave Chuck Norris a typewriter and 0.000000000000000000001th of a second he can write the Complete Works of Shakespeare
Chuck Norris puts the laughter in manslaughter.
Chuck Norris’ beard hair is believed to be an aphrodisiac in China.
The helicopter was invented after Chuck Norris was observed doing 8 roundhouse kicks a second.
Cars were invented to have a faster way of fleeing from Chuck Norris. Not to be outdone, Chuck Norris invented the car accident.
Chuck Norris brushes his teeth with barbed wire.
Chuck Norris can watch an episode of 60 minutes in 22 seconds.
Chuck Norris make onions CRY!
Some people say that Chuck Norris is a myth. Those “some people” are now dead.
When Chuck Norris sneeze, he don’t say “Atchoo” he says “DIE EVERYONE!”. That’s what happens next.
Chuck Norris eats a bowl of diamonds every morning.
Chuck Norris is not only a noun, but a verb.
Guns don’t kill people. Chuck Norris kills People.
There is no theory of evolution. Just a list of animals Chuck Norris allows to live.
Chuck Norris does not sleep. He waits.
The chief export of Chuck Norris is Pain.
There is no chin under Chuck Norris’ Beard. There is only another fist.
Chuck Norris has two speeds. Walk, and Kill.
The leading causes of death in the United States are: 1. Heart Disease 2. Chuck Norris 3. Cancer.
Chuck Norris drives an ice cream truck covered in human skulls.
Chuck Norris is my Homeboy.
Chuck Norris doesn’t go hunting…. CHUCK NORRIS GOES KILLING.
Chuck Norris uses pepper spray to spice up his steaks. (New!)
Crop circles are Chuck Norris’ way of telling the world that sometimes corn needs to lie down.
Chuck Norris is ten feet tall, weighs two-tons, breathes fire, and could eat a hammer and take a shotgun blast standing.
The Great Wall of China was originally created to keep Chuck Norris out. It failed miserably.
Most people have 23 pairs of chromosomes. Chuck Norris has 72… and they’re all poisonous.
Chuck Norris drives an ice cream truck covered in human skulls.
The quickest way to a man’s heart is with Chuck Norris’ fist.
CNN was originally created as the “Chuck Norris Network” to update Americans with on-the-spot ass kicking in real-time.
Chuck Norris can win a game of Connect Four in only three moves.
There is no theory of evolution, just a list of creatures Chuck Norris allows to live.
Chuck Norris once ate three 72 oz. steaks in one hour. He spent the first 45 minutes having sex with his waitress.
What was going through the minds of all of Chuck Norris’ victims before they died? His shoe.
Chuck Norris is the only man to ever defeat a brick wall in a game of tennis.
Police label anyone attacking Chuck Norris as a Code 45-11…. a suicide.
Chuck Norris doesn’t churn butter. He roundhouse kicks the cows and the butter comes straight out.
Chuck Norris doesn’t wash his clothes, he disembowels them.
Chuck Norris will attain statehood in 2009. His state flower will be the Magnolia.
Someone once videotaped Chuck Norris getting pissed off. It was called Walker: Texas Chain Saw Massacre.
If you spell Chuck Norris in Scrabble, you win. Forever.
Fool me once, shame on you. Fool Chuck Norris once and he will roundhouse you in the face.
The opening scene of the movie “Saving Private Ryan” is loosely based on games of dodgeball Chuck Norris played in second grade.
Chuck Norris once shot down a German fighter plane with his finger, by yelling, “Bang!”
Chuck Norris has two speeds: Walk and Kill.
Contrary to popular belief, America is not a democracy, it is a Chucktatorship.
Chuck Norris is not hung like a horse… horses are hung like Chuck Norris.
In the Bible, Jesus turned water into wine. But then Chuck Norris turned that wine into beer.
Time waits for no man. Unless that man is Chuck Norris.
Chuck Norris doesn’t shower, he only takes blood baths.
In an average living room there are 1,242 objects Chuck Norris could use to kill you, including the room itself.
According to the Encyclopedia Brittanica, the Native American “Trail of Tears” has been redefined as anywhere that Chuck Norris walks.
Chuck Norris does not teabag the ladies. He potato-sacks them.
When Chuck Norris goes to donate blood, he declines the syringe, and instead requests a hand gun and a bucket.
There are no steroids in baseball. Just players Chuck Norris has breathed on.
Chuck Norris once challenged Lance Armstrong in a “Who has more testicles?” contest. Chuck Norris won by 5.
Chuck Norris sheds his skin twice a year.";

	public function __construct() {
		add_action( 'admin_notices', array( $this, 'show_fact' ) );
		add_action( 'admin_head', array( $this, 'fact_css' ) );
	}

	function get_fact() {
		$facts_list = explode( "\n", $this->facts );
		return wptexturize( $facts_list[ mt_rand( 0, count( $facts_list ) - 1 ) ] );
	}

	function show_fact() {
		$fact = $this->get_fact();
		echo "<p id='chuck-norris-fact'>$fact</p>";
	}

	function fact_css() {
		$x = is_rtl() ? 'left' : 'right';

		echo "
			<style type='text/css'>
				#chuck-norris-fact {
					float: $x;
					padding-$x: 15px;
					padding-top: 5px;
					margin: 0;
					font-size: 11px;
				}
			</style>
		";
	}
}

/*

                       ▗▄▄▄▄▄▄▄▟▄▄▄▄▄▄
                     ▐██████████████████▙▄▄
                     ███████████████████████▄
                    ▐████████████████████████▌
                    ██████████████████████████
                   ▐██████████████████████████▌
                   ███████████████████████████▌
                  ▗███████████████████████████▀
                  ▟███████████████████████████████████▄▄▖
                 ▐████████████████████████████████████████▄
    ▄            ▟██████████████████████████████████████████▖
    ▝▙▄▄        ▄▟▄▄▟███████████▀▀▀▀▀▀▀▀▀▜███████████████████
      ▀███████████████▖▀▛▘▀▀▀▐███         ▝▙▄▟███████████████
        ▝▀▜███████████▙     ▀███▛▀        ▗▛████████████████▛
           ▝▀▜████ ▟█▜▜▄    ██▀▀▀▀▚       ▐███████▙▄▝▀██████
               ▝▀█▖▘    ▘▛   ▝            ▐█▀▜██████▌  ▝███▘
                  ▘                        ▌   ▝██████▄▄▞▀
                       ▌▝▀                 ▘▌▝ ▟███████▛▀
                   ▘   ▗     ▄▘▘▖          ▝  ▗███▀▜███▛▘
                      ▗▄▟██████▄▟▄         ▖ ▄████▙
                   ▗▗███████▀▀▀▀▘▝▌        ▝▜████▖▀▚▖
                   ▝███▙▖▄▄▄▖  ▝▘▄█         ▐███▀▀▘
                    ▜██▖          █         ▟███▖
                     ▜██████▄▄▄▄▄▖▀         ▟█▛▜▙
                      ▜████████▙           ▗███▙▄
                       ▜█████▖▄    ▄▀▄  ▗▄▟███████▖
                   ▗▟█▘█▄▛▜▜██▙███▙▟███████████████▙
                 ▗███▛ ▜███▙▄▄ ▐████████████████████▙▄▄▄
  ▗▄▄▄▄▄▄▄███▛▀▗▄████▌▗▙█████████████████████████████████▄
  ▐█▀  ▄▄██▛▀▗▟██████▙████████████████████████████████████▙▖
   ▐ ▐██▌     ██████████████████████████████████████████████
   ▝ ▝▀▀▘     ▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀

   ________               __      _   __                _
  / ____/ /_  __  _______/ /__   / | / /___  __________(_)____
 / /   / __ \/ / / / ___/ //_/  /  |/ / __ \/ ___/ ___/ / ___/
/ /___/ / / / /_/ / /__/ ,<    / /|  / /_/ / /  / /  / (__  )
\____/_/ /_/\__,_/\___/_/|_|  /_/ |_/\____/_/  /_/  /_/____/

*/
?>