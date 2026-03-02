/**
 * Red Invoice (https://invoice.theredsun.org).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2024. The Red Sun
 *
 * @license https://www.elastic.co/licensing/elastic-license
 */

/**
 * @param {...string} selectors
 */
export function wait(...selectors) {
    return new Promise((resolve) => {
        if (!selectors.length) {
            resolve([]);
            return;
        }

        const elements = selectors
            .map((selector) => document.querySelector(selector))
            .filter(Boolean);

        if (elements.length === selectors.length) {
            resolve(elements);
            return;
        }

        const observer = new MutationObserver(() => {
            const foundElements = selectors
                .map((selector) => document.querySelector(selector))
                .filter(Boolean);

            if (foundElements.length === selectors.length) {
                observer.disconnect();
                resolve(foundElements);
            }
        });

        observer.observe(document.body, { childList: true, subtree: true });
    });
}

export function instant() {
    const instant = document.querySelector('meta[name="instant-payment"]');

    if (
        instant &&
        instant instanceof HTMLMetaElement &&
        instant.content === 'yes'
    ) {
        return true;
    }

    return false;
}
