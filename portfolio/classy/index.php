<?php
  $title = "Alex Beals | Classy";
  include('../../php/header.php');
?>
  <div class="content">
    <article>
      <h3>Classy | February 2017</h3>
      <h4>HTML, CSS, PHP, SQL (MySQL), JS (jQuery), Python</h4>
      <a class="live" href="//alexbeals.com/projects/classy">&#xf0c1;</a>
      <a class="github" href="//github.com/dado3212/classy">&#xf09b;</a>
      <p>
        I have a love/hate relationship with Dartmouth.  While I love the school, most of the tech infrastructure is horribly outdated, and mainly serves as something to be worked around, rather than a useful tool.  Finding classes is just like this.  You can search by department, and by time period, though you'll have to continuously go back and start a new search from scratch.  The results are also poorly formatted, and miss out on providing valuable information, like median, a class description, and prereqs (all things you'd have to search separately for).
      </p>
      <div class="image">
        <img src="CurrentSearch.png"/>
        <span>The current search results for classes on Dartmouth's site</span>
      </div>
      <p>
        I was pretty sure that I could do better.  I first considered this issue in my sophomore fall.  I wrote a scraper for the ORC (the catalog that gives class descriptions, as well as some prereqs), and a scraper for the timetable for that term.  At that point, I was using a pretty complex system that was just hardcoded into the PHP script.  Despite how specific and obtuse the search was to use, it was incredibly accurate, and after creating it, it chose every one of my classes moving forwards.
      </p>
      <p>
        This term, I realized it was probably time to clean it up so that other people could use it, and it would be easier for me to search using it as well.  I cleaned up all of the scraping scripts to be easier to run, added in medians, and created a new interface.  Currently, you can:
        <ul>
          <li>Search by median</li>
          <li>Search by department</li>
          <li>Search by distribs</li>
          <li>Search by periods</li>
          <li>Leverage powerful points system for searching</li>
          <li>View all information in helpful format</li>
          <li>Filter out previous classes</li>
        </ul>
      </p>
      </p>
      <div class="image">
        <img src="ClassySearch.png"/>
        <span>Classy's search interface</span>
      </div>
      <p>
        The search interface that I built tries to straddle the line between usability and the power that I had over search results with my hardcoded solution.  It allows you to add as many criteria as you want, for medians, periods, departments, and distributive requirements.  For each criteria, you can assign a point value, and classes will be returned based on the total sum of the points for the criteria they meet.  While it takes some initial explanation, the example and pre-filled search make it pretty clear.
      </p>
      <div class="image">
        <img src="ClassyResults.png"/>
        <span>Classy's search results</span>
      </div>
      <p>
        I cleaned up the search results as well, to show median, period, prereqs, title and teacher, distribs, and an overview of the class, showing everything that goes into choosing a class.  All that was left was to pick a name.  I reluctantly settled on Classy, which was recommended by a friend, because I couldn't think of anything better.  If you want to try out the site, <a href="//alexbeals.com/projects/classy">follow this link</a>. If you want to check out the source code on GitHub, <a href="//github.com/dado3212/classy">follow this link instead</a>.
      </p>
    </article>
  </div>
<?php include('../../php/footer.php'); ?>