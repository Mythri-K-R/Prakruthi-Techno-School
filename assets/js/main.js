(()=>{
const $=(s,c=document)=>c.querySelector(s),$$=(s,c=document)=>[...c.querySelectorAll(s)];

// Header shadow once the page scrolls
const hd=$('#hd');
const onScroll=()=>hd.classList.toggle('sc',scrollY>8);
addEventListener('scroll',onScroll,{passive:true});onScroll();

// Mobile drawer menu
const dr=$('#drawer'),mb=$('#mb');
const setMenu=open=>{
  dr.classList.toggle('open',open);dr.inert=!open;dr.setAttribute('aria-hidden',!open);
  mb.setAttribute('aria-expanded',open);document.body.classList.toggle('lock',open);
  (open?$('.drawer-x',dr):mb).focus();
};
mb.addEventListener('click',()=>setMenu(true));
$$('[data-close]',dr).forEach(b=>b.addEventListener('click',()=>setMenu(false)));
matchMedia('(min-width:1100px)').addEventListener('change',e=>{if(e.matches&&dr.classList.contains('open'))setMenu(false)});

// Staggered scroll-in: children of these grids/lists appear one by one.
// ".slide" lists slide in from the side on phones. "done" drops the effect so hover styles work.
$$('.tiles,.acts,.progs,.lcards,.pgl,.facts').forEach(el=>el.classList.add('rv','stagger'));
$$('.feat,.steps,.faq,.quick,.info,.checks').forEach(el=>el.classList.add('rv','stagger','slide'));
$$('.stagger').forEach(el=>[...el.children].forEach((c,k)=>c.style.setProperty('--k',Math.min(k,8))));
// Learning-area icons draw themselves: normalise every stroke to length 1 for the dash animation
$$('.la-ic .i>*').forEach(p=>p.setAttribute('pathLength','1'));

// Reveal on scroll
if('IntersectionObserver' in window){
  const io=new IntersectionObserver(es=>es.forEach(e=>{if(e.isIntersecting){
    const t=e.target;t.classList.add('in');io.unobserve(t);
    if(t.classList.contains('stagger'))setTimeout(()=>t.classList.add('done'),700+75*Math.min(t.children.length,9)+200);
    if(t.classList.contains('la-grid'))setTimeout(()=>t.classList.add('done'),900+90*t.children.length);
  }}),{threshold:.08,rootMargin:'0px 0px -30px 0px'});
  $$('.rv').forEach(e=>io.observe(e));
}else $$('.rv').forEach(e=>e.classList.add('in'));

const calm=matchMedia('(prefers-reduced-motion: reduce)').matches;

// Hero slider: auto-advances, pauses on hover/focus, swipeable, dots + arrows
const hs=$('#hs');
if(hs){
  const bgs=$$('.hero-bg',hs),sl=$$('.hs-slide',hs),dots=$$('.hs-dots button',hs);let cur=0,timer;
  const go=n=>{
    cur=(n+sl.length)%sl.length;
    sl.forEach((s,k)=>{s.classList.toggle('on',k===cur);s.inert=k!==cur});
    bgs.forEach((b,k)=>{if(k===cur)b.loading='eager';b.classList.toggle('on',k===cur)});
    dots.forEach((d,k)=>{d.classList.toggle('on',k===cur);k===cur?d.setAttribute('aria-current','true'):d.removeAttribute('aria-current')});
  };
  const stop=()=>clearInterval(timer);
  const play=()=>{stop();if(!calm)timer=setInterval(()=>go(cur+1),6500)};
  dots.forEach((d,k)=>d.addEventListener('click',()=>{go(k);play()}));
  $$('.hs-arr',hs).forEach(b=>b.addEventListener('click',()=>{go(cur+(+b.dataset.d));play()}));
  hs.addEventListener('mouseenter',stop);hs.addEventListener('mouseleave',play);
  hs.addEventListener('focusin',stop);hs.addEventListener('focusout',play);
  let x0=null,y0=0;
  hs.addEventListener('touchstart',e=>{x0=e.touches[0].clientX;y0=e.touches[0].clientY},{passive:true});
  hs.addEventListener('touchend',e=>{if(x0===null)return;const dx=e.changedTouches[0].clientX-x0,dy=e.changedTouches[0].clientY-y0;if(Math.abs(dx)>50&&Math.abs(dx)>Math.abs(dy)){go(cur+(dx<0?1:-1));play()}x0=null});
  document.addEventListener('visibilitychange',()=>document.hidden?stop():play());
  play();
}

// "Why choose" cards: soft spotlight that follows the pointer
if(matchMedia('(hover:hover)').matches)$$('.why-c').forEach(c=>c.addEventListener('pointermove',e=>{
  const r=c.getBoundingClientRect();c.style.setProperty('--x',e.clientX-r.left+'px');c.style.setProperty('--y',e.clientY-r.top+'px');
}));

// Learning-area cards tilt towards the pointer (after their flip-in has finished)
if(matchMedia('(hover:hover)').matches&&!calm)$$('.la-c').forEach(c=>{
  c.addEventListener('pointermove',e=>{if(!c.parentElement.classList.contains('done'))return;
    const r=c.getBoundingClientRect(),x=(e.clientX-r.left)/r.width-.5,y=(e.clientY-r.top)/r.height-.5;
    c.style.setProperty('--ry',(x*10).toFixed(2)+'deg');c.style.setProperty('--rx',(-y*10).toFixed(2)+'deg')});
  c.addEventListener('pointerleave',()=>{c.style.setProperty('--rx','0deg');c.style.setProperty('--ry','0deg')});
});

// Count-up milestones
const counts=$$('.count');
if(counts.length&&'IntersectionObserver' in window&&!calm){
  const co=new IntersectionObserver(es=>es.forEach(e=>{
    if(!e.isIntersecting)return;co.unobserve(e.target);
    const el=e.target,n=+el.dataset.n,t0=performance.now(),d=1400;
    const tick=t=>{const p=Math.min((t-t0)/d,1);el.textContent=Math.round(n*(1-Math.pow(1-p,3)));if(p<1)requestAnimationFrame(tick)};
    el.textContent='0';requestAnimationFrame(tick);
  }),{threshold:.4});
  counts.forEach(c=>co.observe(c));
}

// Gallery filter + lightbox
const gal=$('#gal'),lb=$('#lb');
if(gal&&lb){
  const items=$$('button',gal),li=$('img',lb),cnt=$('.lb-c',lb);let cur=0;
  const vis=()=>items.filter(b=>!b.classList.contains('h'));
  const show=b=>{const v=vis(),im=$('img',b);cur=v.indexOf(b);li.src=im.src;li.alt=im.alt;cnt.textContent=(cur+1)+' / '+v.length;lb.classList.add('o');document.body.classList.add('lock')};
  const close=()=>{lb.classList.remove('o');document.body.classList.remove('lock')};
  const step=d=>{const v=vis();show(v[(cur+d+v.length)%v.length])};
  items.forEach(b=>b.addEventListener('click',()=>show(b)));
  $$('.filters button').forEach(f=>f.addEventListener('click',()=>{
    $$('.filters button').forEach(x=>{x.classList.toggle('on',x===f);x.setAttribute('aria-pressed',x===f)});
    items.forEach(b=>b.classList.toggle('h',f.dataset.f!=='all'&&b.dataset.c!==f.dataset.f));
  }));
  $('.x',lb).onclick=close;$('.p',lb).onclick=()=>step(-1);$('.n',lb).onclick=()=>step(1);
  lb.addEventListener('click',e=>{if(e.target===lb)close()});
  let x0=null;
  lb.addEventListener('touchstart',e=>{x0=e.touches[0].clientX},{passive:true});
  lb.addEventListener('touchend',e=>{if(x0===null)return;const dx=e.changedTouches[0].clientX-x0;if(Math.abs(dx)>40)step(dx<0?1:-1);x0=null});
  addEventListener('keydown',e=>{if(!lb.classList.contains('o'))return;if(e.key==='Escape')close();if(e.key==='ArrowRight')step(1);if(e.key==='ArrowLeft')step(-1)});
}

addEventListener('keydown',e=>{if(e.key==='Escape'&&dr.classList.contains('open'))setMenu(false)});
})();
