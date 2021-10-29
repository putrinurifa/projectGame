describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/register')
        cy.get('#regis').click()
    })
    it('Login', () => {
        cy.get('#name').type('putri')
        cy.get('#email').type('putri@gmail.com')
        cy.get('#password').type('putri123')
        cy.get('#password-confirm').type('putri123')
        cy.get('#regis').click()
    })
})
describe('Login', () => {
    beforeEach(() => {
        cy.visit('http://127.0.0.1:8000/login')
    })
})