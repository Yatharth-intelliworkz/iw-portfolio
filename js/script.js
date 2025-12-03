
  const cards = document.querySelectorAll('.project-card');
  const bgs = document.querySelectorAll('.bg');
  const fgs = document.querySelectorAll('.fg');
  const filterBtns = document.querySelectorAll('.filter-btn');
  let activeIndex = -1;
  let activeFilter = 'all';

  function getImageWidth(img) {
    return img.naturalWidth || img.offsetWidth * 2;
  }

  function applyFilter(filter) {
    activeFilter = filter;
    filterBtns.forEach(btn => btn.classList.toggle('active', btn.dataset.filter === filter));

    cards.forEach(card => {
      const matches = filter === 'all' || card.dataset.filters.includes(filter);
      card.classList.toggle('dimmed', !matches);
      card.style.pointerEvents = matches ? 'auto' : 'none';
    });

    // Reset hover state
    if (activeIndex !== -1) hoverOut();
  }

function hoverIn(index) {
  const card = cards[index];
  if (card.classList.contains('dimmed')) return;
  if (activeIndex === index) return;

  // Remove previous active state
  document.querySelectorAll('.project-card.active-hover').forEach(c => c.classList.remove('active-hover'));

  activeIndex = index;
  card.classList.add('active-hover'); // ← This triggers white text

  const img = fgs[index].querySelector('img');
  const width = getImageWidth(img);

  // Background fade
  gsap.to(bgs, { opacity: 0, duration: 0.3 });
  gsap.to(bgs[index], { opacity: 1, duration: 0.5 });

  // Image reveal
  gsap.to(fgs, { width: 0, opacity: 0, duration: 0.3 });
  gsap.to(fgs[index], { 
    width: width, 
    opacity: 1, 
    duration: 0.6, 
    ease: "expo.out" 
  });

  // Dim others (but keep hovered one bright white)
  cards.forEach((c, i) => {
    if (i !== index) {
      c.style.opacity = c.classList.contains('dimmed') ? 0.2 : 0.3;
    }
  });
}

function hoverOut() {
  if (activeIndex === -1) return;

  const card = cards[activeIndex];
  card.classList.remove('active-hover'); // ← Remove white text

  activeIndex = -1;

  gsap.to(bgs, { opacity: 0, duration: 0.5 });
  gsap.to(fgs, { width: 0, opacity: 0, duration: 0.6, ease: "expo.out" });

  // Reset opacity for non-dimmed cards
  cards.forEach(card => {
    if (!card.classList.contains('dimmed')) {
      card.style.opacity = 0.7;
    }
  });
}

  // Events
  cards.forEach((card, i) => {
    card.addEventListener('mouseenter', () => hoverIn(i));
    card.addEventListener('mouseleave', hoverOut);
  });

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      hoverOut();
      applyFilter(btn.dataset.filter);
    });
  });

  // Init
  applyFilter('all');
