var assert = require('assert');
const Job = require('../../../../src/backend/model/enterprise/Job');

describe('Job_tests', function () {
  describe('#Job getters', function () {
    var from = new Date(2021, 3, 4);
    var to = new Date(2022, 3, 4);
    var aJob = new Job('', from, to);
    
    it('getDetails', function () {
      assert.strictEqual(aJob.getDetails(), '');
    });

    it('getFromDate', function () {
        assert.strictEqual(aJob.getFromDate(), from);
    });

    it('getToDate', function () {
        assert.strictEqual(aJob.getToDate(), to);
    });

    it('getState', function () {
        assert.strictEqual(aJob.getState(), false);
    });
  });

  describe('#Job State', function () {
    var aJob = new Job('', new Date(), new Date());

    it('changeState', function () {
      assert.strictEqual(aJob.getState(), false);
      aJob.changeState();
      assert.strictEqual(aJob.getState(), true);
    });
  });

  describe('#Job setters', function () {
    var aDate = new Date();
    var dateToSet = new Date(2020, 3, 5)
    var aJob = new Job('', aDate, aDate);
    
    it('setDetails', function () {
      assert.strictEqual(aJob.getDetails(), '');
      aJob.setDetails('?');
      assert.strictEqual(aJob.getDetails(), '?');
    });

    it('setFromDate', function () {
        assert.strictEqual(aJob.getFromDate(), aDate);
        aJob.setFromDate(dateToSet);
        assert.strictEqual(aJob.getFromDate(), dateToSet);
    });

    it('setToDate', function () {
        assert.strictEqual(aJob.getToDate(), aDate);
        aJob.setToDate(dateToSet);
        assert.strictEqual(aJob.getToDate(), dateToSet);
    });
  });
});
