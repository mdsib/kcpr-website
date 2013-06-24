<?php function print_key() { ?>

   <div id="key_box">
      <div class="regular key">REGULAR SHOW</div>
      <div class="special key">SPECIAL SHOW</div>
      <div class="news key">NEWS</div>
      <div class="talk key">TALK SHOW</div>
      <div class="auto key">OTTO</div>
   </div>
<?php }

function print_calendar_time() {
   $times = array(
      "1-4am",
      "4-7",
      "7",
      "8",
      "9",
      "10",
      "11",
      "12pm",
      "1",
      "2",
      "3",
      "4",
      "5",
      "5:30",
      "6",
      "7",
      "8",
      "9",
      "10",
      "11",
      "12am",
   );

   echo "<div class='calendar_times'>";
   foreach ($times as $time)
   {
      echo "<div class='time'>".$time."</div>";
   }
   echo "</div>";
}


echo "<div class='content'>";

$auto1 = array (
   "title" => "",
   "length" => 1,
   "format" =>"auto");
$auto2 = array (
   "title" => "",
   "length" => 2,
   "format" =>"auto");
$auto3 = array (
   "title" => "",
   "length" => 3,
   "format" =>"auto");
$auto4 = array (
   "title" => "",
   "length" => 4,
   "format" =>"auto");
$auto5 = array (
   "title" => "",
   "length" => 5,
   "format" =>"auto");

////REGULAR SHOWS
$pizza = array (
   "title" => "DJ Pizza",
   "length" => 2,
   "format" => "regular"
);
$logan = array (
   "title" => "Logan's Run",
   "length" => 3,
   "format" => "regular"
);
$liz = array (
   "title" => "Liz",
   "length" => 2,
   "format" => "regular"
);
$nutella = array (
   "title" => "dj nutella",
   "length" => 1,
   "format" => "regular"
);
$pickles = array (
   "title" => "Pickles",
   "length" => 2,
   "format" => "regular"
);
$hippie = array (
   "title" => "Disgusting Old Hippie",
   "length" => 2,
   "format" => "regular"
);
$vibeyvibes = array (
   "title" => "Vibey Vibes",
   "length" => 2,
   "format" => "regular"
);
$libra = array (
   "title" => "Lady Libra",
   "length" => 2,
   "format" => "regular"
);
$pidgeon = array (
   "title" => "Pidgeon",
   "length" => 2,
   "format" => "regular"
);
$vulva = array (
   "title" => "DJ Vulva",
   "length" => 2,
   "format" => "regular",
);
$djumpteenth = array (
   "title" => "DJ Umpteenth",
   "length" => 1,
   "format" => "regular",
);
$bobak = array (
   "title" => "Bobak",
   "length" => 2,
   "format" => "regular",
);
$connorfs = array (
   "title" => "Connor F. S.",
   "length" => 1,
   "format" => "regular",
);
$connor = array (
   "title" => "Connor",
   "length" => 1,
   "format" => "regular",
);
$lauren = array (
   "title" => "Lauren",
   "length" => 2,
   "format" => "regular",
);
$kid = array (
   "title" => "Kid Chameleon",
   "length" => 1,
   "format" => "regular",
);
$annie = array (
   "title" => "Annie",
   "length" => 1,
   "format" => "regular",
);
$sam = array (
   "title" => "Spaceman Sam",
   "length" => 1,
   "format" => "regular",
);
$magic = array (
   "title" => "DJ Magic Touch",
   "length" => 1,
   "format" => "regular",
);
$swiftmane = array (
   "title" => "DJ Swiftmane",
   "length" => 4,
   "format" => "regular",
);
$funkydunk = array (
   "title" => "DJ Funkydunk",
   "length" => 3,
   "format" => "regular",
);

$dino = array (
   "title" => "DJ Dino",
   "length" => 2,
   "format" => "regular",
);
$bug = array (
   "title" => "Bug",
   "length" => 2,
   "format" => "regular",
);
$chrisnic = array (
   "title" => "Chris-Nic",
   "length" => 3,
   "format" => "regular",
);
$michele = array (
   "title" => "Michele",
   "length" => 1,
   "format" => "regular",
);
$ian = array (
   "title" => "Ian",
   "length" => 1,
   "format" => "regular",
);
$bethany = array (
   "title" => "DJ Pizza",
   "length" => 2,
   "format" => "regular",
);
$jimmy = array (
   "title" => "Jimmy Neutron",
   "length" => 2,
   "format" => "regular",
);
$backwards = array (
   "title" => "DJ Backwards",
   "length" => 2,
   "format" => "regular",
);
$kidsthesedays = array (
   "title" => "Kids These Days",
   "length" => 1,
   "format" => "regular",
);
$fiscal = array (
   "title" => "Fiscal Responsibility",
   "length" => 1,
   "format" => "regular",
);
$dissonance = array (
   "title" => "Dissonance",
   "length" => 3,
   "format" => "regular",
);
$wilbur = array (
   "title" => "Wilbur",
   "length" => 2,
   "format" => "regular",
);
$pnb = array (
   "title" => "Pickles and Bugershake",
   "length" => 2,
   "format" => "regular",
);
$mae = array (
   "title" => "DJ Mae",
   "length" => 2,
   "format" => "regular",
);
$ariel = array (
   "title" => "Ariel",
   "length" => 2,
   "format" => "regular",
);
$danimals = array (
   "title" => "Danimals",
   "length" => 1,
   "format" => "regular",
);
$capnj = array (
   "title" => "Cap'n J",
   "length" => 1,
   "format" => "regular",
);
$sophie = array (
   "title" => "Sophie",
   "length" => 1,
   "format" => "regular",
);
$blue = array (
   "title" => "Electric Blue",
   "length" => 2,
   "format" => "regular",
);
$bear = array (
   "title" => "Baby Bear",
   "length" => 2,
   "format" => "regular",
);
$rawdog = array (
   "title" => "Raw Dog",
   "length" => 1,
   "format" => "regular",
);
$rlc = array (
   "title" => "Robot Lover's Club",
   "length" => 2,
   "format" => "regular",
);
$crub = array (
   "title" => "Kid Crub",
   "length" => 1,
   "format" => "regular",
);
$blume = array (
   "title" => "DJ Blume",
   "length" => 2,
   "format" => "regular",
);
$ben = array (
   "title" => "Ben",
   "length" => 2,
   "format" => "regular",
);
//SPECIAL FORMATS
$block = array (
   "title" => "Writer's Block",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$wefunk = array (
   "title" => "W-E-F-U-N-K",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$nerd = array (
   "title" => "n3rd0m",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$cosmicbg = array (
   "title" => "ỊИ₣ỊN̛̟̣̯ͤ͌̇ͧ̿̇̉͊͋͗̒ͨ͑̄ͯ̿͋̕͝ͅИỊ₮Є ϾØϨMỊϾ Ɓ∆ϾK₲ЯØṲИḐ̷̶̡̗͕̺͓͂ͬͦ́̉ͩͤ̎",
   "length" => 2, //in number of half hours
   "format" => "special",
);
$slack = array (
   "title" => "eternal slack",
   "length" => 2, //in number of half hours
   "format" => "special",
);
$insound = array (
   "title" => "In Sound from Way Out",
   "length" => 2, //in number of half hours
   "format" => "special",
);
$bandwagon = array (
   "title" => "Bandwagon",
   "length" => 2, //in number of half hours
   "format" => "special",
);
$brainwash = array (
   "title" => "thee BrA.I.nwash",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$bonusstage = array (
   "title" => "Bonus Stage",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$lofi = array (
   "title" => "Lo Fi, High Five!",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$mopedals = array (
   "title" => "Mo Pedals",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$mangez = array (
   "title" => "Mangez Ma Baguette",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$newreleases = array (
   "title" => "New Releases",
   "length" => 2, //in number of half hours
   "format" => "special",
);
$cst = array (
   "title" => "Cute, Single, & Twee",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$redspot = array (
   "title" => "The Red Spot",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$mega = array (
   "title" => "Megalopolis",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$muzicdotnet = array (
   "title" => "Muzic Dot Net",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$crates = array (
   "title" => "Milkcrates For Days",
   "length" => 2, //in number of half hours
   "format" => "special",
);
$edge = array (
   "title" => "80's Inner Edge",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$iggy = array (
   "title" => "Iggy Bowie Lou",
   "length" => 2, //in number of half hours
   "format" => "special",
);
$groovin = array (
   "title" => "Groovin' With the World",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$kites = array (
   "title" => "Kites, Kung Fu, and Trophies",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$scarydoor = array (
   "title" => "The Scary Door",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$drub = array (
   "title" => "Drub FX",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$nodisco = array (
   "title" => "This Ain't No Disco",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$speaklow = array (
   "title" => "Speak Low",
   "length" => 2, //in number of half hours
   "format" => "special",
);
$rasta = array (
   "title" => "Rasta Revolution",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$diggity = array (
   "title" => "No Diggity No Doubt",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$breadroses = array (
   "title" => "Bread and Roses",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$kickit = array (
   "title" => "Can I Kick It?",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$noise = array (
   "title" => "New Noise Manifesto",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$slaytanic = array (
   "title" => "Slaytanic Carnage",
   "length" => 1, //in number of half hours
   "format" => "special",
);
$musicamericana = array (
   "title" => "Music Americana",
   "length" => 2, //in number of half hours
   "format" => "special",
);
$roundtrip = array (
   "title" => "Roundtrip",
   "length" => 1,
   "format" => "special",
);
$grayarea = array (
   "title" => "The Gray Area",
   "length" => 1,
   "format" => "special",
);
$soulandblues = array (
   "title" => "Soul and Blues Review",
   "length" => 1,
   "format" => "special",
);
$miles = array (
   "title" => "Miles Ahead",
   "length" => 2,
   "format" => "special",
);
$playtime = array (
   "title" => "Velanche's Playtime",
   "length" => 2,
   "format" => "special",
);
$nodepression = array (
   "title" => "No Depression",
   "length" => 2,
   "format" => "special",
);
$fridayunwind = array (
   "title" => "Friday Unwind",
   "length" => 2,
   "format" => "special",
);
$deepplaya = array (
   "title" => "Deep Playa",
   "length" => 1,
   "format" => "special",
);
$flashback = array (
   "title" => "Friday Night Flashbacks",
   "length" => 2,
   "format" => "special",
);
$altshow = array (
   "title" => "That Alternative 70's Show",
   "length" => 2,
   "format" => "special",
);
$audioscapes = array (
   "title" => "Audioscapes",
   "length" => 2,
   "format" => "special",
);
$picklesvariety = array (
   "title" => "The Biba Pickles Variety Hour",
   "length" => 1,
   "format" => "special",
);
$arctic = array (
   "title" => "Arctic Dance Party",
   "length" => 2,
   "format" => "special",
);
$anti = array (
   "title" => "ANTI",
   "length" => 2,
   "format" => "special",
);
$fudge = array (
   "title" => "Fudgepack",
   "length" => 2,
   "format" => "special",
);
$club = array (
   "title" => "Club 91",
   "length" => 3,
   "format" => "special",
);

//NEWS/////////////////////////////////////////////
$freespeech = array (
   "title" => "Free Speech Radio",
   "length" => 1,
   "format" => "news",
);
$democracynow = array(
   "title" => "Democracy Now",
   "length" => 1, //in number of half hours
   "format" => "news",
);
$cpcurrent = array(
   "title" => "Cal Poly Current Events",
   "length" => 1, //in number of half hours
   "format" => "news",
);

//TALK////////////////////////////////////////////
$gettingitin = array(
   "title" => "Getting It In",
   "length" => 1, //in number of half hours
   "format" => "talk",
);
$story = array(
   "title" => "KCPR Story Hour",
   "length" => 1, //in number of half hours
   "format" => "talk",
);

//ARRAYS OF SHOWS ON DAYS/////////////////////////////////
$sunday = array(
   $auto5,
   $libra,
   $dissonance,
   $auto2,
   $bandwagon,
   $auto2,
   $lofi,
   $mopedals,
   $mangez,
   $gettingitin,
   $auto1,
);

$monday = array(
   $auto2,
   $vulva,
   $democracynow,
   $newreleases,
   $vibeyvibes,
   $auto2,
   $bug,
   $freespeech,
   $redspot,
   $liz,
   $muzicdotnet,
   $crates,
   $auto1,
);

$tuesday = array(
   $auto2,
   $bear,
   $democracynow,
   $lauren,
   $hippie,
   $pickles,
   $pizza,
   $freespeech,
   $brainwash,
   $cosmicbg,
   $bonusstage,
   $nodisco,
   $auto2
);

$wednesday = array(
   $auto2,
   $insound,
   $democracynow,
   $speaklow,
   $slack,
   $nutella,
   $danimals,
   $auto2,
   $freespeech,
   $groovin,
   $kites,
   $anti,
   $noise,
   $slaytanic,
   $auto1,
);

$thursday = array(
   $auto4,
   $democracynow,
   $musicamericana,
   $swiftmane,
   $auto2,
   $freespeech,
   $soulandblues,
   $nerd,
   $miles,
   $wefunk,
   $playtime,
);

$friday = array(
   $auto4,
   $democracynow,
   $nodepression,
   $auto2,
   $blume,
   $bobak,
   $freespeech,
   $block,
   $flashback,
   $altshow,
   $audioscapes,
);

$saturday = array(
   $auto5,
   $pidgeon,
   $auto4,
   $picklesvariety,
   $auto2,
   $arctic,
   $fudge,
   $logan,
);




$dayNames = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

$days = array($sunday, $monday, $tuesday, $wednesday, $thursday, $friday, $saturday);
//days->day->show->info
//$days [0-6]  [0-?]   [0,1,2]

echo '<div id="ajax_content" class="border-module" style="height:1200px">';
print_key();
print_calendar_time();
for ($d=0; $d<7; $d++)
{
   echo "<div class='day'><div class='dayName'>".$dayNames[$d]."</div>";
   foreach ($days[$d] as $show)
   {
      echo "<div class='".$show["format"]."' class='schedule_show' style='height:".($show["length"] * 52)."'>".$show["title"]."</div>";
   }
   echo "</div>";
}
echo "</div>";
echo "</div>";
?>
