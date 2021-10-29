describe('Logout', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/home')
        cy.get('#login').click()
    })
    it('Login', () => {
        cy.visit('http://127.0.0.1:8000/')
    })
})