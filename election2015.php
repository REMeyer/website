<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>

<body>

<div id="wrapper">

<?php include "header.php";?>

<div id="page" class="container">
<div id="content">
<h3 class='strong'>2015 Canadian Federal Election Alternative Vote Simulation</h3>
<p>One of the primary issues during the long election campaign was reforming the way in which our elections fundamentally work. Both the NDP and the, now majority government, Liberals promised to do away with the First-Past-The-Post (FPTP), winner-take-all system we currently employ for a more representative system. The Liberals say that they are “committed to ensuring that 2015 will be the last federal election conducted under the FPTP voting system” and that they plan to bring forward legislation within 18 months for this purpose.  There will undoubtedly be considerable debate in the coming months on which electoral system constitutes a ‘more representative’ election result and which would implement it in the best way.</p>

<p>There are a number of proposed alternatives to FPTP, which range from ranked ballots to full proportional representation (PR). The simplest reform to implement is called the Alternative Vote (AV, also called Instant-Runoff voting). This system allows voters to rank their candidates by preference. The votes will be tabulated and a cycle of dropping the lowest candidate and re-tabulating the results keeping the ranked preferences in mind until one candidate reaches 50% of the vote or there’s only one candidate left. Alternatives to AV include merging and electing multiple representatives per riding known as Single Transferable Vote (STV). There is also Mixed Member Proportional Representation (MMP), which changes the seat balance such that half of MPs are elected normally and the rest according to the overall popular vote. Both Romania and New Zealand have switched to using MMP and it was the system favoured by the NDP.  Finally, there is PR, which only considers the popular vote as a means for electing MPs to parliament. A biggest potential downside to PR is the loss of local MPs who both represents the region geographically but also politically.</p>

<p>The AV will most likely be the frontrunner for electoral change for a number of reasons. First of all it is simple, only requiring voters to rank their candidates by preference. In addition, Ontario is allowing municipal governments to use ranked ballots starting in 2018 meaning voters in Canada’s most populous province will already be familiar with the new voting system. The main benefit to AV is that it eliminates strategic voting by essentially baking the strategy into the ballot.  It will also help stop vote splitting between parties that voters consider similar. However, AV may not necessarily enable the proportional representation that Canadians are asking for. In fact, it could further solidify the positions of the three largest parties.</p>

<p>I set out to investigate how the results of the 2015 election would have changed if we voted using AV instead of FPTP. To do this I needed the election results, now published by Elections Canada, as well as some estimate for voter preferences. In their final Sunday poll, Nanos broke down the 2nd choice of voters of each main party. For instance, the Conservative voter’s 2nd choices were 31% for the Liberals, 12% for the NDP, 8% for the Green, and 2% for the Bloq. Using this information I created an Alternative Vote simulator that performs the runoff for each riding, using real election results and the Nanos 2nd choice information. The results are both surprising and telling.</p>
   
<p>According to this simulation, 46 ridings would have had their results changed. To summarize the results, the Conservatives lose a huge 29 ridings and the Bloq’s 10 ridings would be literally decimated to 1. All of these ridings would instead elect Liberal or NDP candidates and would gain 28 and 10 seats respectively (they would also swap 4 ridings each bringing our total of switched ridings to 46).  This makes sense as according to Nanos 50% of both Liberal and NDP supporters consider the other party their second choice. A majority of Conservative voters on the other hand had no second preference. sSimply by switching to an AV system would actually make the election results even less representative than it was using FPTP [see plots]. This seat breakdown of this new government would be 216 for the Liberals, 70 for the Conservatives, 54 for the NDP, 1 for the Greens, and 1 for the Bloq. </p>

<p>This analysis does have a number of systematic issues. The most apparent issue is that the 2015 election results are certainly a product of strategic voting and that many voters may have changed their first choice had they had the chance to rank the candidates. Another is that I only had access to information regarding the second choices for each party, so if more than one runoff was required I assumed that the redistributed voters shared the same second choices as their new party. Of Canada’s 338 ridings, 158 ridings had outright winners or required one runoff, while 131 required two runoffs, and 49 required three. The results become less reliable once there are two or three runoffs being performed.</p>

<p>The above issues aside, I believe these results clearly indicate that a ranked balloting system does not necessarily ensure a more representative government than FPTP in Canada. It would have significant impacts in ridings where ‘vote-splitting’ is dominant. For instance, a Conservative won the riding of Kamloops--Thompson--Cariboo in BC with ~24,000 votes while the Liberals and NDP both received ~21,000 votes each. With an AV system this riding would have been won by the NDP instead. Some recent articles argue that, since the Liberal party benefited from the FPTP system in their majority government victory, they won’t pursue any electoral reform. However, these results indicate that not only will an AV system have a real impact, it will funnel seats into both the Liberals and the NDP at the detriment of the Conservatives. If there is electoral reform on the horizon, don’t be surprised if the Liberals come out supporting a change to a ranked ballot. </p>
</div>


<?php include "sidebar.php";?>

</div>
</div>

<?php include "footer.php";?>

</body>
</html>

