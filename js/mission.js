$(function() {
    var insideWe = true;
    var insideProblem = true;
    var insideSolution = true;

    var triggerHookText = 0.4;
    var triggerHookMessage = 0.4;
    var parDuration = 0;

    var controller = new ScrollMagic.Controller();

    var stickTop = new ScrollMagic.Scene({
        triggerElement: "body",
        triggerHook: 0
    })
    .setPin("#message-top")
    .addTo(controller);

    var stickWe = new ScrollMagic.Scene({
        triggerElement: "div#we.message",
        triggerHook: triggerHookText
    })
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

    var stickProblemImportant = new ScrollMagic.Scene({
        triggerElement: "div#problem.important",
        triggerHook: triggerHookMessage
    })
    .on("enter", function () {
      console.log("helo enetere");

      $("div#we.important").text("Lorem ipsum dolor sit amet, consectetur \
      adipiscing elit. Proin dignissim urna sed lorem aliquet, sed tincidunt \
      tortor dignissim. Curabitur semper tempor cursus. Mauris sed consectetur est,");
      $("div#problem.important").css("opacity", 0);
      //$("div#problem.message-text").css("opacity", 0.5);
    })
    .on("leave", function () {
      console.log("helo asdf");
      $("div#we.important").text("Lorem ipsum dolor");
      $("div#problem.important").css("opacity", 0.5);

    })
    .addTo(controller);

    var stickSolution = new ScrollMagic.Scene({
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

    var stickSolutionImportant = new ScrollMagic.Scene({
        triggerElement: "div#solution.important",
        triggerHook: triggerHookMessage
    })
    .on("enter", function () {
      $("div#we.important").velocity({opacity: 1}, {duration: 200});
      $("div#solution.important").css("opacity", 0);
      $("div#we.important").text("Lorem ipsum dolor sit amet, consectetur \
      adipiscing elit. Proin dignissim urna sed lorem aliquet, sed tincidunt \
      tortor dignissim. Curabitur semper tempor cursus. Mauris sed consectetur est, \
      asfasdf asdf adipiscing elit.");
    })
    .on("leave", function () {
      $("div#we.important").velocity({opacity: 0.5}, {duration: 200});
      $("div#solution.important").css("opacity", 0.5);
      $("div#we.important").text("Lorem ipsum dolor sit amet, consectetur \
      adipiscing elit. Proin dignissim urna sed lorem aliquet, sed tincidunt \
      tortor dignissim. Curabitur semper tempor cursus. Mauris sed consectetur est,");
    })
    .addTo(controller);
});
