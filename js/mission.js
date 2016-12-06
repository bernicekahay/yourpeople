$(function() {
    var insideWe = true;
    var insideProblem = true;
    var insideSolution = true;

    var triggerHookText = 0.4;
    var triggerHookMessage = 0.3;
    var parDuration = 300;

    var controller = new ScrollMagic.Controller();

    var stickTop = new ScrollMagic.Scene({
        triggerElement: "body",
        triggerHook: 0
    })
    .setPin("#message-top")
    .addTo(controller);

    var stickWe = new ScrollMagic.Scene({
        triggerElement: "div#we.message",
        triggerHook: triggerHookText,
        duration: parDuration
    })
    .setPin("div#we.message")
    .on("end", function(e) {
        if(insideWe) {
            $("div#we.fade").velocity({opacity: 0});
            $("h2#we.Arial-Black").velocity({opacity: 0});
            $("div#we.important").velocity({opacity: .5});
        } else {
            $("div#we.fade").velocity({opacity: 1});
            $("h2#we.Arial-Black").velocity({opacity: 1});
            $("div#we.important").velocity({opacity: 1});
        }
        insideWe = !insideWe;
    })
    .addTo(controller);

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


    var stickProblem = new ScrollMagic.Scene({
        triggerElement: "div#problem.message",
        triggerHook: triggerHookText,
        duration: parDuration
    })
    .setPin("div#problem.message")
    .on("end", function(e) {
       if(insideProblem) {
            $("div#problem.fade").velocity({opacity: 0});
            $("h2#problem.Arial-Black").velocity({opacity: 0});
            $("div#problem.important").velocity({opacity: .5});
        } else {
            $("div#problem.fade").velocity({opacity: 1});
            $("h2#problem.Arial-Black").velocity({opacity: 1});
            $("div#problem.important").velocity({opacity: 1});
        }
        insideProblem = !insideProblem;
    })
    .addTo(controller);

    var stickProblemImportant = new ScrollMagic.Scene({
        triggerElement: "div#problem.important",
        triggerHook: triggerHookMessage
    })
    .on("enter", function () {
      console.log("entered");
      $("div#problem.important").css("opacity", 0);
      $("div#we.important").text("Lorem ipsum dolor sit amet, consectetur \
      adipiscing elit. Proin dignissim urna sed lorem aliquet, sed tincidunt \
      tortor dignissim. Curabitur semper tempor cursus. Mauris sed consectetur est,");
    })
    .on("leave", function () {
      console.log("left");
      $("div#we.important").text("Lorem ipsum dolor");
      $("div#problem.important").css("opacity", 0.5);
    })
    //.setPin("div#problem.important")
    .addTo(controller);

    var stickSolution = new ScrollMagic.Scene({
        triggerElement: "div#solution.message",
        triggerHook: triggerHookText,
        duration: parDuration
    })
    .setPin("div#solution.message")
    .on("end", function(e) {
        if(insideSolution) {
            $("div#solution.fade").velocity({opacity: 0});
            $("h2#solution.Arial-Black").velocity({opacity: 0});
            $("div#solution.important").velocity({opacity: 0.5});
        } else {
            $("div#solution.fade").velocity({opacity: 1});
            $("h2#solution.Arial-Black").velocity({opacity: 1});
            $("div#solution.important").velocity({opacity: 1});
        }
        insideSolution = !insideSolution;
    })
    .addTo(controller);

    var stickSolutionImportant = new ScrollMagic.Scene({
        triggerElement: "div#solution.important",
        triggerHook: triggerHookMessage
    })
    .on("enter", function () {
      $("div#solution.important").css("opacity", 0);
      $("div#we.important").text("Lorem ipsum dolor sit amet, consectetur \
      adipiscing elit. Proin dignissim urna sed lorem aliquet, sed tincidunt \
      tortor dignissim. Curabitur semper tempor cursus. Mauris sed consectetur est, \
      asfasdf asdf adipiscing elit.");
    })
    .on("leave", function () {
      $("div#solution.important").css("opacity", 0.5);
      $("div#we.important").text("Lorem ipsum dolor sit amet, consectetur \
      adipiscing elit. Proin dignissim urna sed lorem aliquet, sed tincidunt \
      tortor dignissim. Curabitur semper tempor cursus. Mauris sed consectetur est,");
    })
    //].setPin("div#solution.important")
    .addTo(controller);

    var stickLink = new ScrollMagic.Scene({
        triggerElement: "div#link.message",
        triggerHook: 0.6
    })
    .setPin("div#link.message")
    .on("enter", function (e) {
        $("div#we.important").velocity({opacity: 1});
    })
    .on("leave", function (e) {
        $("div#we.important").velocity({opacity: 0.5});
    })
    .addTo(controller);

});
