import throttle from 'lodash/throttle';

class StickyObserver {
    /**
     * @type HTMLElement
     */
    el;
    /**
     * @type HTMLElement
     */
    sentinel;
    /**
     * @type Function
     */
    listener;

    constructor(el) {
        this.el = el;
        this.listener = throttle(() => this.refresh(), 50);
        this.sentinel = document.createElement('div');
        this.scrollContainer = el.closest('.modal') ?? window;

        this.sentinel.dataset.stickySentinel = true;
        this.el.parentElement.insertBefore(this.sentinel, this.el);

        this.scrollContainer.addEventListener('scroll', this.listener);
        window.addEventListener('resize', this.listener);
    }

    destroy() {
        this.el = null;
        this.sentinel.remove();
        this.scrollContainer.removeEventListener('scroll', this.listener);
        window.removeEventListener('resize', this.listener);
    }

    refresh() {
        if(!this.el) {
            return;
        }
        const rect = this.el.getBoundingClientRect();
        const anchor = this.el.querySelector('[data-sticky-anchor]');

        this.setStuck(rect.top > this.sentinel.getBoundingClientRect().top);

        if(anchor) {
            this.el.style.setProperty('--sticky-offset', `${rect.top - anchor.getBoundingClientRect().top}px`);
        }
    }

    setStuck(stuck) {
        this.el.classList.toggle('stuck', stuck);
        this.el.dispatchEvent(new CustomEvent('sticky-change', { detail:stuck }));
    }
}

export default {
    inserted(el, { value, expression }) {
        if(value || !expression) {
            el._stickyObserver = new StickyObserver(el);
        }
    },
    update(el, { value }) {
        if(value && !el._stickyObserver) {
            el._stickyObserver = new StickyObserver(el);
        }
        el._stickyObserver?.refresh();
    },
    unbind(el) {
        el._stickyObserver?.destroy();
    },
}
