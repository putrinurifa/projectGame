describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/home')
        cy.get('#login').click()
    })
    it('Login', () => {
        cy.get('#email').type('putri@gmail.com')
        cy.get('#password').type('putri123')
        cy.get('#login').click()
    })
})
describe('Home', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/home')
    })
})