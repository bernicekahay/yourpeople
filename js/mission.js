//FORMAT TBD, THIS IS TEMP

$(function() {
  //helper variables
    var insideWe = true;
    var insideProblem = true;
    var insideSolution = true;

    var triggerHookText = 0.5;
    var triggerHookMessage = 0.4;
    var parDuration = 0;

    //ScrollMagic controller
    var controller = new ScrollMagic.Controller();

    //pin top words
    var stickTop = new ScrollMagic.Scene({
        triggerElement: "body",
        triggerHook: 0
    })
    .setPin("#message-top")
    .addTo(controller);

    //first group of words, "we"
    var We = new ScrollMagic.Scene({
        triggerElement: "div#we.message",
        triggerHook: triggerHookText,
        offset: 50
    })
    //fade out unimportant words and keep important words when scroll past trigger
    .on("start", function(e) {
        if(insideWe) {
            $("div#we.fade").velocity({opacity: 0}, {duration: 200});
            $("h2#we.title-text").velocity({opacity: 0}, {duration: 200});
            $("div#we.important").velocity({opacity: .5}, {duration: 200});
        } else {
            $("div#we.fade").velocity({opacity: 1}, {duration: 200});
            $("h2#we.title-text").velocity({opacity: 1}, {duration: 200});
            $("div#we.important").velocity({opacity: 1}, {duration: 200});
        }
        insideWe = !insideWe;
    })
    .addTo(controller);

    //pin important words to top and edit margins
    var stickWeImportant = new ScrollMagic.Scene({
        triggerElement: "div#we.important",
        triggerHook: triggerHookMessage
    })
    .on("enter", function () {
      $("div#we.important").css("margin-right", "20%");
    })
    .on("leave", function () {
      $("div#we.important").css("margin-right", "0%");
    })
    .setPin("div#we.important")
    .addTo(controller);

    //second group of words, "problem"
    var Problem = new ScrollMagic.Scene({
        triggerElement: "div#problem.message",
        triggerHook: triggerHookText
    })
    .on("start", function(e) {
       if(insideProblem) {
            $("div#problem.fade").velocity({opacity: 0}, {duration: 200});
            $("h2#problem.title-text").velocity({opacity: 0}, {duration: 200});
            $("div#problem.important").velocity({opacity: .5}, {duration: 200});
        } else {
            $("div#problem.fade").velocity({opacity: 1}, {duration: 200});
            $("h2#problem.title-text").velocity({opacity: 1}, {duration: 200});
            $("div#problem.important").velocity({opacity: 1}, {duration: 200});
        }
        insideProblem = !insideProblem;
    })
    .addTo(controller);

    //fade out unimportant words and keeps important ones
    var stickProblemImportant = new ScrollMagic.Scene({
        triggerElement: "div#problem.important",
        triggerHook: triggerHookMessage
    })
    .on("enter", function () {
      $("div#we.important").text("Lorem ipsum dolor sit amet, consectetur \
      adipiscing elit.");

      //to prevent skipping the changing opacity
      $("div#problem.important").text("");
      $("div#problem.important").css("opacity", 0);
    })
    .on("leave", function () {
      $("div#we.important").text("Lorem ipsum dolor");
      $("div#problem.important").text(" sit amet, consectetur \
      adipiscing elit.");
      $("div#problem.important").css("opacity", 0.5);
    })
    .addTo(controller);

    //pins important words from solution
    var Solution = new ScrollMagic.Scene({
        triggerElement: "div#solution.message",
        triggerHook: triggerHookText,
        duration: parDuration
    })
    .on("start", function(e) {
        if(insideSolution) {
            $("div#solution.fade").velocity({opacity: 0}, {duration: 200});
            $("h2#solution.title-text").velocity({opacity: 0}, {duration: 200});
            $("div#solution.important").velocity({opacity: 0.5}, {duration: 200});
        } else {
            $("div#solution.fade").velocity({opacity: 1}, {duration: 200});
            $("h2#solution.title-text").velocity({opacity: 1}, {duration: 200});
            $("div#solution.important").velocity({opacity: 1}, {duration: 200});
        }
        insideSolution = !insideSolution;
    })
    .addTo(controller);

    //important words stay, when reach top, make faded text opacity 1
    var stickSolutionImportant = new ScrollMagic.Scene({
        triggerElement: "div#solution.important",
        triggerHook: triggerHookMessage
    })
    .on("enter", function () {
      $("div#we.important").velocity({opacity: 1}, {duration: 200});
      $("div#we.important").text("Lorem ipsum dolor sit amet, consectetur \
      adipiscing elit. Proin dignissim urna sed lorem aliquet, sed tincidunt \
      tortor dignissim.");

      $("div#solution.important").css("opacity", 0);
      $("div#solution.important").text("");
    })
    .on("leave", function () {
      $("div#we.important").velocity({opacity: 0.5}, {duration: 200});
      $("div#we.important").text("Lorem ipsum dolor sit amet, consectetur adipiscing elit.");

      $("div#solution.important").text("Proin dignissim urna sed lorem aliquet, sed tincidunt tortor dignissim.");
      $("div#solution.important").css("opacity", 0.5);
    })
    .addTo(controller);
});
