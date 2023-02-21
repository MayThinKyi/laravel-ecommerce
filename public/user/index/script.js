export default function setAutoSlide() {
    const slideBanner = document.querySelector('.slide-banner__wrapper');
    const slides = slideBanner.children;
    let i = 0;
    setInterval(() => {
      if (i + 1 < slides.length) {
        slideBanner.style.transform = `translateX(-${100 * (i + 1)}%)`;
        i++;
      } else {
        slideBanner.style.transform = `translateX(0%)`;
        i = 0;
      }
    }, 8000);
  }
  export default class Hamburger {
    constructor() {
      this.hbgBtn = document.querySelector('.navbar__hamburger');
      this.body = document.querySelector('body');
      this.navbar = document.querySelector('#navbar');
      this.hbgBtn.addEventListener('click', this.turnOnOpenMode);
    }

    turnOnOpenMode = () => {
      this.body.classList.add('open-mode');
      this.navbar.classList.add('open-mode');
      this.navbar.addEventListener('click', this.tunrOffOpenMode);
    };

    tunrOffOpenMode = (e) => {
      if (e.target.matches('.open-mode .navbar__wrapper')) {
        this.body.classList.remove('open-mode');
        this.navbar.classList.remove('open-mode');
      }
    };
  }
  import setSearchMode from './search_mode.js';
  import setAutoSlide from './auto_slide.js';
  import Scrollbar from './scrollbar.js';
  import Hamburger from './hamburger.js';
  import setToggleOnTable from './toggle_table.js';
  import setToggleList from './toggle_list.js';

  setSearchMode();
  setAutoSlide();
  const slidelists = document.querySelectorAll('.slidelist');
  Array.from(slidelists).map((slidelist) => new Scrollbar().set(slidelist));
  new Hamburger();
  setToggleOnTable();
  const toggleLists = document.querySelectorAll('.lists__wrapper');
  Array.from(toggleLists).map(setToggleList);
  export default class ScrollBuilder {
    set(scrollist) {
      const scroll = new Scrollbar(scrollist);
      scroll.setItemSize();
      scroll.addScroll();
      scroll.setRemainWidths();
      return scroll;
    }
  }

  class Scrollbar {
    constructor(slidelist) {
      this.header = slidelist.querySelector('.slidelist__header');
      this.list = slidelist.querySelector('.slidelist__list');
      this.scrollLine = slidelist.querySelector('.slidelist__scroll-line');
      this.prevBtn = slidelist.querySelector('.slidelist__btn--left');
      this.nextBtn = slidelist.querySelector('.slidelist__btn--right');

      this.prevBtn.addEventListener('click', this.onPrevClick);
      this.nextBtn.addEventListener('click', this.onNextClick);
      window.addEventListener('mouseup', this.onMouseUp);
      window.addEventListener('mousemove', this.onMouseMove);

      this.HD_PADDING = 8;
      this.ITEM_MARGIN = 16;

      this.lineWidth = this.scrollLine.offsetWidth;
      this.LIST_MARGIN = 48;

      this.dragable = false;
      this.coordX = 0;
      this.requestFrame = false;
      this.prevX = 0;
      this.prevListX = 0;
    }

    moveToStart() {
      this.scrollbar.style.transform = `translateX(0px)`;
      this.list.style.transform = `translateX(0px)`;
      this.prevX = 0;
      this.prevListX = 0;
    }

    moveToEnd() {
      this.scrollbar.style.transform = `translateX(${this.scrollRemain}px)`;
      this.list.style.transform = `translateX(${-this.listRemain}px)`;
      this.prevX = this.scrollRemain;
      this.prevListX = this.listRemain;
    }

    moveBarAsCursor = (e) => {
      const newCoordX = e.clientX;
      const scrollChange = newCoordX - this.coordX; // 스크롤바를 클릭한 채로 커서를 움직인 변화량
      const listChange = (scrollChange / this.scrollRemain) * this.listRemain; // 커서 변화량에 따른 스크롤 위치 변화량

      const scrollX = this.prevX + scrollChange;
      const listX = this.prevListX + listChange;

      if (scrollX > 0 && scrollX < this.scrollRemain) {
        this.scrollbar.style.transform = `translateX(${scrollX}px)`;
        this.list.style.transform = `translateX(${-listX}px)`;
        this.prevX = scrollX;
        this.prevListX = listX;
      } else if (scrollX <= 0) {
        this.moveToStart();
      } else if (scrollX >= this.scrollRemain) {
        this.moveToEnd();
      }
      this.coordX = newCoordX;
      this.requestFrame = false;
    };

    onMouseDown = (e) => {
      this.dragable = true;
      this.coordX = e.clientX;
    };

    onMouseMove = (e) => {
      e.preventDefault();
      if (this.dragable && !this.requestFrame) {
        this.requestFrame = true;
        requestAnimationFrame(() => {
          this.moveBarAsCursor(e);
        });
      }
    };

    onMouseUp = () => {
      if (this.dragable) {
        this.dragable = false;
      }
    };

    getNearestStep() {
      const relativeSteps = this.steps.map((step) => {
        return { ...step, gap: Math.abs(step.offsetX - this.prevListX) };
      });
      const nearest = relativeSteps.sort((a, b) => a.gap - b.gap)[0];
      return nearest.id;
    }

    moveToStep(step) {
      const x = (step / this.listRemain) * this.scrollRemain;
      this.scrollbar.style.transform = `translateX(${x}px)`;
      this.list.style.transform = `translateX(${-step}px)`;
      this.prevX = x;
      this.prevListX = step;
    }

    onNextClick = () => {
      if (this.prevListX < this.listRemain) {
        const nearest = this.getNearestStep();
        if (nearest <= this.steps.length - 1 - 3) {
          const target = this.steps[nearest + 1].offsetX;
          this.moveToStep(target);
        } else {
          this.moveToEnd();
        }
      }
    };

    onPrevClick = () => {
      if (this.prevListX > 0) {
        const nearest = this.getNearestStep();
        if (nearest > 0) {
          const target = this.steps[nearest - 1].offsetX;
          this.moveToStep(target);
        } else {
          this.moveToStart();
        }
      }
    };

    setItemSize() {
      this.headerWidth = this.header.offsetWidth - 2 * this.HD_PADDING;
      this.itemWidth = (this.headerWidth - 2 * this.ITEM_MARGIN) / 3;
      this.steps = Array.from(this.list.children).map((item, i) => {
        item.style.width = this.itemWidth + 'px';
        return { id: i, offsetX: item.offsetLeft };
      });
      this.listWidth = this.list.scrollWidth;
    }

    addScroll() {
      this.scrollbar = document.createElement('button');
      this.scrollbar.setAttribute('class', 'slidelist__scrollBtn');
      this.barWidth = this.lineWidth * (this.headerWidth / this.listWidth);
      this.scrollbar.style.width = this.barWidth + 'px';
      this.scrollbar.addEventListener('mousedown', this.onMouseDown);
      this.scrollLine.append(this.scrollbar);
    }

    setRemainWidths() {
      this.scrollRemain = this.lineWidth - this.barWidth;
      this.listRemain = this.listWidth - this.headerWidth;
    }
  }
  function AddSearchMode(navbar) {
    if (!navbar.classList.contains('search-mode')) {
      navbar.classList.add('search-mode');
    }
  }

  function showSearchPane(navbar) {
    const searchBtn = navbar.querySelector('.search__btn');
    const searchInput = navbar.querySelector('.search__input');
    searchBtn.addEventListener('click', () => {
      AddSearchMode(navbar);
    });
    searchInput.addEventListener('focus', () => {
      AddSearchMode(navbar);
    });
  }

  function hideSearchPane(navbar) {
    const exitBtn = navbar.querySelector('.search__exit-btn');
    exitBtn.addEventListener('click', () => {
      navbar.classList.remove('search-mode');
    });
  }

  export default function setSearchMode() {
    const navbar = document.querySelector('#navbar');
    showSearchPane(navbar);
    hideSearchPane(navbar);
  }
  function onClickBtn(e) {
    const btn = e.target;
    btn.classList.toggle('show');
  }

  export default function setToggleList(list) {
    if (window.innerWidth < 640) {
      const btn = list.querySelector('.lists__toggle');
      btn.addEventListener('click', onClickBtn);
    }
  }
  let prevtitle = undefined;

  function onTitleClick(e) {
    const title = e.target;
    if (title !== prevtitle) {
      e.target.classList.add('toggle');
      if (prevtitle) {
        prevtitle.classList.remove('toggle');
      }
      prevtitle = title;
    } else {
      e.target.classList.remove('toggle');
      prevtitle = undefined;
    }
  }

  export default function setToggleOnTable() {
    if (window.innerWidth < 640) {
      const table = document.querySelector('.table');
      table.classList.add('toggle');
      const titles = document.querySelectorAll('.table__title');
      Array.from(titles).map((title) =>
        title.addEventListener('click', onTitleClick)
      );
    }
  }
