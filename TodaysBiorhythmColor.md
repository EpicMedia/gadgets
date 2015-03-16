# Introduction #

[Biorhythms](http://en.wikipedia.org/wiki/Biorhythm) are based on the interactions of three different cycles:

  * Physical, a 23-day cycle
  * Emotional, a 28-day cycle
  * Intellectual, a 33-day cycle

Most programs that represent these cycles today assign one of the three primary colors (red, green, and blue) to each cycle when rendering them.  Thus:

![http://epicmedia-gadgets.googlecode.com/svn/trunk/biorhythm/biorhythm-cycle.png](http://epicmedia-gadgets.googlecode.com/svn/trunk/biorhythm/biorhythm-cycle.png)

As typically represented, the cycles swing from -1 (maximum "bad") to +1 (maximum "good") for each attribute.  When looking at your status for a particular day and time, you look at both where you are in each cycle and the direction that cycle is heading (e.g. you're at +0.5 physical on the rising edge, meaning you're half way to your physical peak and are only going to get better over the next few days ... but you're +0.8 intellectual on the falling edge, meaning you're near your intellectual peak but starting to swing down).

I've taken this one step farther and asked the question "What would the 'color of the day' look like, if I treated each cycle as the amount of a single primary color, and combined them?"

# Installation #

To add this to your Google personalized homepage, click here:

[![](http://buttons.googlesyndication.com/fusion/add.gif)](http://fusion.google.com/add?moduleurl=http://epicmedia-gadgets.googlecode.com/svn/trunk/biorhythm/biorhythm.xml)

If you originally added this gadget from sjwalter.googlepages.com, please replace that copy with the one being served here out of Google Code.  There have been several enhancements to the gadget, including:

  * "trending" arrows, indicating the direction each of the three cycles is heading
  * i18n support (currently for English, Spanish, French, and Italian)

# Details #

First off, this was really an experiment in gadget creation, color manipulation, and trying to remember my JavaScript programming (it's been awhile).  To calculate the biorhythm color for the day:

  * Compute today's value for each cycle.  This results in a number between -1 and +1
  * Shift the scale of each value to between 0 and 255
  * Compute a single color by assigning:
    * blue to the physical cycle
    * green to the emotional cycle
    * red to the intellectual cycle

So, if P, E, and I represent the scaled values for the physical, emotional, and intellectual cycles (respectively), then:

Today's Color = RGB(I, E, P)

For example, here's the previous graphic of the cycles and the corresponding combined color:

![http://epicmedia-gadgets.googlecode.com/svn/trunk/biorhythm/biorhythm-cycle.png](http://epicmedia-gadgets.googlecode.com/svn/trunk/biorhythm/biorhythm-cycle.png)

![http://epicmedia-gadgets.googlecode.com/svn/trunk/biorhythm/color-spectrum.png](http://epicmedia-gadgets.googlecode.com/svn/trunk/biorhythm/color-spectrum.png)

# What Do the Colors Mean? #

To be honest, I'm not certain.  It really depends on you and how or what you are feeling during a particular day.  One of these days, I'll do some comparative analysis of historical figures to see what their "color for the day" was during particular events in their lives.

If you're looking for a more traditional biorhythm representation, check out the DailyBiorhythmGraph gadget.