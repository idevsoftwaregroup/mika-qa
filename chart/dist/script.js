(function ($) {
  $(function () {
    var datasource = {
      name: "Upper Parent", // New upper parent
      title: "upper manager", // Title for the upper parent
      children: [
        {
          name: "Lao Lao",
          title: "general manager",
          children: [
            {
              name: "Child 1", // New child node
              title: "Assistant Manager 1" // Title for the first child node
            },
            {
              name: "Child 2", // New child node
              title: "Assistant Manager 2" // Title for the second child node
            }
          ]
        },
        {
          name: "Tie Hua",
          title: "senior engineer",
          parent: "Lao Lao" // Add a parent property to explicitly connect Tie Hua to Lao Lao
        },
        {
          name: "Su Miao",
          title: "department manager",
          children: [
            { name: "Bo Miao", title: "department manager" },
            {
              name: "Su Miao",
              title: "department manager",
              children: [
                { name: "Tie Hua", title: "senior engineer" }, // This Tie Hua is now a child of Su Miao
                {
                  name: "Hei Hei",
                  title: "senior engineer",
                  children: [
                    { name: "Pang Pang", title: "engineer" },
                    { name: "Xiang Xiang", title: "UE engineer" }
                  ]
                }
              ]
            },
            { name: "Hong Miao", title: "department manager" },
            { name: "Chun Miao", title: "department manager" }
          ]
        }
      ]
    };

    var oc = $("#chart-container").orgchart({
      data: datasource,
      nodeContent: "title",
      pan: true,
      zoom: true
    });
  });
})(jQuery);
