import "../css/style.scss";

function initMobileMenu() {
  const mobileMenuButton = document.querySelector(".site-header__menu-button");
  const mobileMenuContainer = document.querySelector(
    ".site-header__mobile-nav-container"
  );

  function toggleMobileMenu() {
    const menuButtonAriaExpanded =
      mobileMenuButton.getAttribute("aria-expanded");

    mobileMenuButton.setAttribute(
      "aria-expanded",
      menuButtonAriaExpanded === "true" ? "false" : "true"
    );

    mobileMenuContainer.classList.toggle("mobile-menu-open");
  }

  mobileMenuButton.addEventListener("click", toggleMobileMenu);
}

function initFaqAccordion() {
  const accordion = document.querySelector(".faq__accordion");
  const accordionHeadings =
    document.getElementsByClassName("accordion__heading");
  const accordionPanels = document.getElementsByClassName("accordion__panel");

  const panelIdTemplate = "accordion__panel--";
  const buttonIdTemplate = "accordion__button--";

  function enhanceAccordionPanels() {
    for (let i = 0; i < accordionPanels.length; i++) {
      const panel = accordionPanels[i];
      panel.classList.add("hidden");
      panel.setAttribute("aria-hidden", "true");
      panel.id = `${panelIdTemplate}${i + 1}`;
      panel.setAttribute("aria-labelledby", `${buttonIdTemplate}${i + 1}`);
    }
  }

  function addAccordionIcon(container) {
    const iconMarkup = `
    <svg role="img" aria-hidden="true" class="accordion__icon" width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.932136 0.966691C1.45789 0.434986 2.31698 0.436107 2.84134 0.969183L8 6.21359L13.1587 0.969182C13.683 0.436106 14.5421 0.434986 15.0679 0.966691C15.5844 1.48904 15.5844 2.32973 15.0679 2.85208L8 10L0.932136 2.85208C0.415642 2.32974 0.415642 1.48904 0.932136 0.966691Z" fill="#3399FF"/>
    </svg>  
  `;

    container.insertAdjacentHTML("beforeend", iconMarkup);
  }

  // make the heading interactive by inserting a button into it
  function enhanceAccordionHeadings() {
    for (let i = 0; i < accordionHeadings.length; i++) {
      const heading = accordionHeadings[i];
      const button = document.createElement("button");

      button.insertAdjacentHTML(
        "afterbegin",
        `<span>${heading.textContent}</span>`
      );

      heading.textContent = "";

      addAccordionIcon(button);

      button.classList.add("accordion__button");
      button.id = `${buttonIdTemplate}${i + 1}`;

      button.setAttribute("aria-expanded", "false");
      button.setAttribute("aria-controls", `${panelIdTemplate}${i + 1}`);

      heading.appendChild(button);
    }
  }

  function toggleAccordionPanel(e) {
    const accordionButton = e.target.closest(".accordion__button");
    // If the event didn't occur on an accordion button, then don't do anything
    if (!accordionButton) return;

    const associatedPanelId = accordionButton.getAttribute("aria-controls");
    const associatedPanel = document.getElementById(associatedPanelId);
    const associatedIcon = accordionButton.querySelector(".accordion__icon");
    const panelAriaHidden = associatedPanel.getAttribute("aria-hidden");
    const buttonAriaExpanded = accordionButton.getAttribute("aria-expanded");

    associatedPanel.classList.toggle("hidden");

    associatedPanel.setAttribute(
      "aria-hidden",
      panelAriaHidden === "true" ? "false" : "true"
    );

    accordionButton.setAttribute(
      "aria-expanded",
      buttonAriaExpanded === "true" ? "false" : "true"
    );

    associatedIcon.classList.toggle("accordion__icon--rotated");
  }

  // Progressively enhance the accordion (make it interactive and maintain accessibility) with JavaScript
  function enhanceAccordion() {
    enhanceAccordionHeadings();
    enhanceAccordionPanels();
    accordion.addEventListener("click", toggleAccordionPanel);
  }

  enhanceAccordion();
}

initMobileMenu();
initFaqAccordion();
